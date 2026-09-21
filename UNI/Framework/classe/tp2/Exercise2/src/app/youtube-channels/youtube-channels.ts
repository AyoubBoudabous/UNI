import { Component } from '@angular/core';

@Component({
  imports: [],
  selector: 'app-youtube-channels',
  styleUrl: './youtube-channels.css',
  templateUrl: './youtube-channels.html',
})
export class YoutubeChannels {
  channels = [
    {
      name: 'TutosInfo',
      picture: 'Images_TP2/Images/Tutos.png',
      link: 'https://www.youtube.com/@TutosInfo',
      nbSubsribers: 256,
      country: 'Tunisia',
    },
    {
      name: 'BEN TECH PRO TV',
      picture: 'Images_TP2/Images/BenTech.png',
      link: 'https://www.youtube.com/@BENTECHPROTV',
      nbSubsribers: 3570,
      country: 'Tunisia',
    },
    {
      name: 'Code Senior',
      picture: 'Images_TP2/Images/Senior.png',
      link: 'https://www.youtube.com/@codeursenior',
      nbSubsribers: 56500,
      country: 'France',
    },
  ];

  ajouterAbonne(x: number, y: any) {
    this.channels[x].nbSubsribers++;
    y.disabled = true;
  }
  calculNb(nb: string) {
    let s = 0;
    let x = Number(nb);
    for (let i = 0; i < this.channels.length; i++) {
      if (this.channels[i].nbSubsribers >= x) {
        s++;
      }
    }
    alert('le nombre de chaines ayant plus que ' + x + ' abonnés est : ' + s);
  }
}
