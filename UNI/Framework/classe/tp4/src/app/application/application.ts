import { Component, computed, effect, signal } from '@angular/core';

@Component({
  imports: [],
  selector: 'app-application',
  styleUrl: './application.css',
  templateUrl: './application.html',
})
export class Application {
  valeur = signal(20);
  carre = computed(() => this.valeur() * this.valeur());
  pair = computed(() => this.valeur() % 2 == 0);

  initValeur() {
    this.valeur.set(0);
  }
  incrementValeur() {
    this.valeur.update((v) => v + 1);
  }
  constructor() {
    effect(() => {
      console.log('Valeur actuelle:' + this.valeur());
    });
  }
}
