import path from 'path';
// import configBase from './base.conf';
import Component from './BXConfigComponent';

const config = [];
var BComponent = new Component();

BComponent.addComponent('nav', {
	name: 'dpch:nav'
}).addComponent('nav', {
	name: 'dpch:mainSlider'
}).addComponent('nav', {
	name: 'dpch:workoutSlider'
}).addComponent('nav', {
	name: 'dpch:reviewsPhotoSlider'
}).addComponent('nav', {
	name: 'dpch:reviewsReviewSlider'
})


var configBase = BComponent.mergeConfig([
	'nav',
]);

config.push(configBase);

export default configBase;