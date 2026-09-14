import { Component } from '@angular/core';
import { Header } from './header/header';
import { Content } from './content/content';
import { Footer } from './footer/footer';

@Component({
  imports: [Header, Content, Footer],
  selector: 'app-website',
  styleUrl: './website.css',
  templateUrl: './website.html',
})
export class Website {}
