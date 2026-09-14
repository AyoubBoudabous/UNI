import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { Website } from './website/website';

@Component({
  imports: [Website],
  selector: 'app-root',
  styleUrl: './app.css',
  templateUrl: './app.html',
})
export class App {
  protected readonly title = signal('tp1');
}
