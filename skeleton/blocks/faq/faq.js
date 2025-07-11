import { Accordion } from '../accordion/Accordion'

export default function initFaqAccordion() {
  new Accordion({
    selectors: {
      accordion: '.tabs',
      item: '.tab-item',
      trigger: '.tab__trigger',
      hidden: '.tab-hidden'
    },
    classes: { 
        opened: 'tab-hidden_opened' 
    },
    oneOpen: true,
    transitionDuration: 300
  })
}