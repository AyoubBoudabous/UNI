import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  imports: [FormsModule],
  selector: 'app-client',
  styleUrl: './client.css',
  templateUrl: './client.html',
})
export class Client {
  titre: string = 'Informations client';
  nom: string = 'Mohamed Ben Salah';
  age: number = 35;
  photo: string = 'Images_TP2/client.png';
  fidelys: boolean = false;
  nbCommandes: number = 10;
  remarque: string = 'RAS';
  onAjouterCommande() {
    this.nbCommandes++;
    console.log('le nombre de commandes est : ' + this.nbCommandes);
    console.log('la remarque est : ' + this.remarque);
  }
  onAfficherAdresse(adresse: string) {
    alert(adresse);
  }
}
