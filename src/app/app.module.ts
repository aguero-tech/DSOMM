import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { ReactiveFormsModule } from '@angular/forms';
import { MatSidenavModule } from '@angular/material/sidenav';
import { MatExpansionModule } from '@angular/material/expansion';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MaterialModule } from './material/material.module';
import { LogoComponent } from './component/logo/logo.component';
import { MatrixComponent } from './component/matrix/matrix.component';
import { SidenavButtonsComponent } from './component/sidenav-buttons/sidenav-buttons.component';
import { TopHeaderComponent } from './component/top-header/top-header.component';
import { ActivityDescriptionComponent } from './component/activity-description/activity-description.component';
import { ymlService } from './service/yaml-parser/yaml-parser.service';
import { HttpClientModule } from '@angular/common/http';
import { CircularHeatmapComponent } from './component/circular-heatmap/circular-heatmap.component';
import { MappingComponent } from './component/mapping/mapping.component';
import { ReadmeToHtmlComponent } from './component/readme-to-html/readme-to-html.component';
import { UsageComponent } from './component/usage/usage.component';
import { UserdayComponent } from './component/userday/userday.component';
import { AboutUsComponent } from './component/about-us/about-us.component';
import { DependencyGraphComponent } from './component/dependency-graph/dependency-graph.component';
import { TeamsComponent } from './component/teams/teams.component';
import { ToStringValuePipe } from './pipe/to-string-value.pipe';

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
    AppRoutingModule,
    BrowserAnimationsModule,
    MaterialModule,
    ReactiveFormsModule,
    HttpClientModule,
    MatExpansionModule, // Imported here
    MatFormFieldModule, // Imported here
    MatInputModule, // Imported here
  ],
  exports: [
    MatExpansionModule, // Exported for other modules
    MatFormFieldModule, // Exported for other modules
    MatInputModule, // Exported for other modules
  ],
  providers: [ymlService],
  bootstrap: [AppComponent],
  schemas: [CUSTOM_ELEMENTS_SCHEMA], // Ensures Angular recognizes custom elements
})
export class AppModule {}
