import { Component } from '@angular/core';

@Component({
  imports: [],
  selector: 'app-client',
  styleUrl: './client.css',
  templateUrl: './client.html',
})
export class Client {
  titre: string = 'Informations client';
  nom: string = 'Mohamed Ben Salah';
  age: number = 35;
}
