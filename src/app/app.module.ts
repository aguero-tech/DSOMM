import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { ReactiveFormsModule } from '@angular/forms';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { MatChipsModule } from '@angular/material/chips';
import { MatExpansionModule } from '@angular/material/expansion';
import { MatTableModule } from '@angular/material/table';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MaterialModule } from './material/material.module';
import { HttpClientModule } from '@angular/common/http';

// Custom components
import { LogoComponent } from './component/logo/logo.component';
import { MatrixComponent } from './component/matrix/matrix.component';
import { SidenavButtonsComponent } from './component/sidenav-buttons/sidenav-buttons.component';
import { TopHeaderComponent } from './component/top-header/top-header.component';
import { ActivityDescriptionComponent } from './component/activity-description/activity-description.component';
import { CircularHeatmapComponent } from './component/circular-heatmap/circular-heatmap.component';
import { MappingComponent } from './component/mapping/mapping.component';
import { ReadmeToHtmlComponent } from './component/readme-to-html/readme-to-html.component';
import { UsageComponent } from './component/usage/usage.component';
import { UserdayComponent } from './component/userday/userday.component';
import { AboutUsComponent } from './component/about-us/about-us.component';
import { DependencyGraphComponent } from './component/dependency-graph/dependency-graph.component';
import { TeamsComponent } from './component/teams/teams.component';
import { ToStringValuePipe } from './pipe/to-string-value.pipe';

// Services
import { ymlService } from './service/yaml-parser/yaml-parser.service';

@NgModule({
  declarations: [
    AppComponent,
    LogoComponent,
    MatrixComponent,
    SidenavButtonsComponent,
    TopHeaderComponent,
    ActivityDescriptionComponent,
    CircularHeatmapComponent,
    MappingComponent,
    ReadmeToHtmlComponent,
    UsageComponent,
    AboutUsComponent,
    DependencyGraphComponent,
    TeamsComponent,
    ToStringValuePipe,
    UserdayComponent,
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    ReactiveFormsModule,
    MatFormFieldModule, // Added
    MatInputModule, // Added
    MatChipsModule, // Added
    MatExpansionModule, // Added
    MatTableModule, // Added
    AppRoutingModule,
    MaterialModule,
    HttpClientModule,
  ],
  providers: [ymlService],
  bootstrap: [AppComponent],
  schemas: [CUSTOM_ELEMENTS_SCHEMA], // Avoids unknown element issues
})
export class AppModule {}
