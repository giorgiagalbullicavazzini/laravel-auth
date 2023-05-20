import './bootstrap';

// Import SCSS
import '~resources/scss/app.scss';

// Import Bootstrap JS
import * as bootstrap from 'bootstrap';

// Process all assets
import.meta.glob([
    '../img/**'
]);