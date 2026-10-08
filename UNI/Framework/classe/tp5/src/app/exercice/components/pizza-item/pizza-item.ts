import { Component, input, output } from '@angular/core';
import { Pizza } from '../../models/pizza';

@Component({
  imports: [],
  selector: 'ayo-pizza-item',
  styleUrl: './pizza-item.css',
  templateUrl: './pizza-item.html',
})
export class PizzaItem {
  pizza = input.required<Pizza>();
  position = input.required<number>();
  deletePizza = output<number>();

  onDelete() {
    this.deletePizza.emit(this.pizza().id);
  }
}
