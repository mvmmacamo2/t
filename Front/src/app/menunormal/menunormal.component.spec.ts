import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MenunormalComponent } from './menunormal.component';

describe('MenunormalComponent', () => {
  let component: MenunormalComponent;
  let fixture: ComponentFixture<MenunormalComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MenunormalComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MenunormalComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
