import { Component, inject, Signal } from '@angular/core';
import { RouterLink } from '@angular/router';
import { ProductService } from '../../services/product-service';
import { Product } from '../../model/product';

@Component({
  imports: [RouterLink],
  selector: 'app-product-list',
  styleUrl: './product-list.css',
  templateUrl: './product-list.html',
})
export class ProductList {
  private readonly productService = inject(ProductService);
  product: Signal<Product[]> = this.productService.products;
}
