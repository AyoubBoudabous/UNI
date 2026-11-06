import { Component, inject, signal } from '@angular/core';
import { JsonPipe } from '@angular/common';
import { ProductService } from '../../services/product-service';
import { ActivatedRoute, Router } from '@angular/router';
import { Product } from '../../model/product';

@Component({
  imports: [JsonPipe],
  selector: 'app-product-selected',
  styleUrl: './product-selected.css',
  templateUrl: './product-selected.html',
})
export class ProductSelected {
  private readonly productService = inject(ProductService);
  private readonly activatedRoute = inject(ActivatedRoute);
  private readonly router = inject(Router);
  product = signal<Product | undefined>(undefined);

  ngOnInit() {
    const idProduct = this.activatedRoute.snapshot.params['idP'];
    if (idProduct) {
      this.product.set(this.productService.getProductById(idProduct));
    }
  }
  onBackToProducts() {
    this.router.navigate(['/products']);
  }
}
