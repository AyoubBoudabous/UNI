import { Todo } from './todo/todo';
import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { ListStudent } from './list-student/list-student';
import { Country } from './country/country';

@Component({
  imports: [Todo, ListStudent, Country],
  selector: 'app-root',
  styleUrl: './app.css',
  templateUrl: './app.html',
})
export class App {
  protected readonly title = signal('tp3');
}
