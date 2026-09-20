import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  imports: [FormsModule],
  selector: 'app-laptop',
  styleUrl: './laptop.css',
  templateUrl: './laptop.html',
})
export class Laptop {
  pc = {
    brand: 'Lenovo',
    model: 'ThinkBook 16 G0 IRL',
    description:
      'Processeur Intel Core 7 240H - Mémore 24 Go DDR5 - Disque SSD M.2 NVMe 512 Go - Carte graphique Intel Graphics',
    price: 3919,
    image: 'Images_TP2/laptop.jpg',
    availability: true,
  };
  get gamme(): boolean {
    return this.pc.price <= 2000;
  }
  alerter() {
    alert(this.pc.brand + ' ' + this.pc.model + ' a pour caracteriques  ' + this.pc.description);
  }
}
