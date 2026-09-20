import { Component, signal } from '@angular/core';
import { Laptop } from './laptop/laptop';

@Component({
  imports: [Laptop],
  selector: 'app-root',
  styleUrl: './app.css',
  templateUrl: './app.html',
})
export class App {
  protected readonly title = signal('Exercise1');
}
