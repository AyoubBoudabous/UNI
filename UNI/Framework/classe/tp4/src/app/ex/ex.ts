import { DecimalPipe } from '@angular/common';
import { Component, computed, signal, WritableSignal } from '@angular/core';
import { Item } from '../item';

@Component({
  imports: [DecimalPipe],
  selector: 'app-ex',
  styleUrl: './ex.css',
  templateUrl: './ex.html',
})
export class Ex {
  items: WritableSignal<Item[]> = signal<Item[]>([
    { id: 11, photo: 'articles/lait.jpg', name: 'lait', price: 1.35, quantity: 2 },
    { id: 12, photo: 'articles/pate.jpg', name: 'pâtes', price: 0.41, quantity: 1 },
    { id: 13, photo: 'articles/riz.jpg', name: 'riz', price: 3.8, quantity: 1 },
    { id: 14, photo: 'articles/yaourt.jpg', name: 'yaourt', price: 0.6, quantity: 6 },
  ]);
  totalItems = computed(() => {
    return this.items().reduce((acc, item) => acc + item.quantity, 0);
  });
  totalPrice = computed(() => {
    return this.items().reduce((acc, item) => acc + item.price * item.quantity, 0);
  });
  remise = computed(() => {
    return this.totalPrice() > 100 ? this.totalPrice() * 0.2 : 0;
  });
  finalPrice = computed(() => {
    return this.totalPrice() - this.remise();
  });
  updateQuantity(item: Item, value: number) {
    const newItems = this.items().map((i) => {
      if (i.id == item.id) {
        return { ...i, quantity: value };
      } else {
        return i;
      }
    });

    this.items.set(newItems);
    console.log('Articles updated:', newItems);
  }

  addItem() {
    let nextId = 1;
    for (const item of this.items()) {
      if (item.id >= nextId) {
        nextId = item.id + 1;
      }
    }

    const newItem: Item = {
      id: nextId,
      photo: 'articles/eau.jpg',
      name: 'bouteille d’eau',
      price: 0.7,
      quantity: 1,
    };

    this.items.set([...this.items(), newItem]);
  }

  deleteItem(articleName: string) {
    const newItems = this.items().filter((item) => item.name != articleName);
    this.items.set(newItems);
  }
}
