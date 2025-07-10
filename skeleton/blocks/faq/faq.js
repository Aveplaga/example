import { Accordion } from '../accordion/Accordion'

export default function initFaqAccordion() {
  new Accordion({
    selectors: {
      accordion: '.accordion',
      item: '.accordion-item',
      trigger: '.accordion__trigger',
      hidden: '.accordion-hidden'
    },
    oneOpen: true,
    transitionDuration: 300
  })
}
