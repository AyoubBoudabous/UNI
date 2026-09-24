import {
  CurrencyPipe,
  DatePipe,
  DecimalPipe,
  JsonPipe,
  TitleCasePipe,
  UpperCasePipe,
} from '@angular/common';
import { Component } from '@angular/core';

@Component({
  imports: [UpperCasePipe, DatePipe, CurrencyPipe, DecimalPipe, TitleCasePipe, JsonPipe],
  selector: 'app-country',
  styleUrl: './country.css',
  templateUrl: './country.html',
})
export class Country {
  country = {
    name: 'tunisie',
    capital: 'tunis',
    independence: new Date(1956, 2, 20),
    area: 163.61,
    gdp: 12000,
  };
  
}
