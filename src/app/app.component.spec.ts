import { ComponentFixture, TestBed } from '@angular/core/testing';
import { RouterTestingModule } from '@angular/router/testing';
import { AppComponent } from './app.component';

import { MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { MatTableModule } from '@angular/material/table';
import { MatChipsModule } from '@angular/material/chips';
import { MatExpansionModule } from '@angular/material/expansion';

import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';

describe('AppComponent', () => {
  let app: AppComponent;
  let fixture: ComponentFixture<AppComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [
        RouterTestingModule,
        MatFormFieldModule,
        MatInputModule,
        MatTableModule,
        MatChipsModule,
        MatExpansionModule,
      ],
      declarations: [AppComponent],
      schemas: [CUSTOM_ELEMENTS_SCHEMA], // ✅ Prevents unknown element errors
    }).compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(AppComponent);
    app = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create the app', () => {
    expect(app).toBeTruthy();
  });

  it(`should have as title 'DSOMM'`, () => {
    expect(app.title).toEqual('DSOMM');
  });

  it('check for fork Agueros github ribbon generation', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const HTMLElement: HTMLElement = fixture.nativeElement;
    var divTag = HTMLElement.querySelector('div')!;
    var aTag = divTag.querySelector('a')!;
    expect(aTag.textContent).toEqual('Fork Aguero GitHub');
  });
});
