import './bootstrap';
import Alpine from 'alpinejs';
import {
    Input,
    initTE,
} from "tw-elements";

initTE({ Input });
window.Alpine = Alpine;
Alpine.start();
