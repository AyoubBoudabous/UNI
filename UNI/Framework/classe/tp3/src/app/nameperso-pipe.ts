import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'nameperso',
})
export class NamepersoPipe implements PipeTransform {
  transform(value: unknown, ...args: unknown[]): unknown {
    return null;
  }
}
