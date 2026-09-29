import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { YoutubeChannels } from './youtube-channels/youtube-channels';

@Component({
  imports: [YoutubeChannels],
  selector: 'app-root',
  styleUrl: './app.css',
  templateUrl: './app.html',
})
export class App {
  protected readonly title = signal('Exercise2');
}
