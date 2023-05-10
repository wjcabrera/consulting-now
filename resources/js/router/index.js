import { createRouter, createWebHistory } from 'vue-router';
import UsView from '@/views/UsView.vue';
import AlliancesView from '@/views/AlliancesView.vue';
import ProductsView from '@/views/ProductsView.vue';
import PostsView from '@/views/PostsView.vue';
import ContactView from '@/views/ContactView.vue'
import TMEView from '@/views/TMEView.vue';
import ConvEntelligenceView from '@/views/ConvEntelligenceView.vue';
import InnovationExperienceView from '@/views/InnovationExperienceView.vue';
import ExperienceChangeView from '@/views/ExperienceChangeView.vue';
import TalentMappingView from '@/views/TalentMappingView.vue';
import CrossView from '@/views/CrossView.vue';
import DataDrivenView from '@/views/DataDrivenView.vue';
import DNALeadershipView from '@/views/DNALeadershipView.vue';
import HumanCenteredDesignView from '@/views/HumanCenteredDesignView.vue';
import CoachingView from '@/views/CoachingView.vue';
import JointManagementView from '@/views/JointManagementView.vue';
import PostComponent from '@/components/PostComponent.vue';
import AdminView from '@/views/AdminView.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      redirect: '/us',
    },
    {
      path: '/us',
      name: 'us',
      component: UsView
    },
    {
      path: '/alliances',
      name: 'alliances',
      component: AlliancesView
    },
    {
      path: '/products',
      name: 'products',
      component: ProductsView,
    },
    {
      path: '/products/tme',
      name: 'TMEView',
      component: TMEView
    },
    {
      path: '/products/conversational-intelligence',
      name: 'ConvEntelligenceView',
      component: ConvEntelligenceView
    },
    {
      path: '/products/innovation-experience',
      name: 'InnovationExperienceView',
      component: InnovationExperienceView
    },
    {
      path: '/products/experience-of-change',
      name: 'ExperienceChangeView',
      component: ExperienceChangeView
    },
    {
      path: '/products/talent-mapping',
      name: 'TalentMappingView',
      component: TalentMappingView
    },
    {
      path: '/products/cross-view',
      name: 'CrossView',
      component: CrossView
    },
    {
      path: '/products/data-driven',
      name: 'DataDrivenView',
      component: DataDrivenView
    },
    {
      path: '/products/dna-of-leadership',
      name: 'DNALeadershipView',
      component: DNALeadershipView
    },
    {
      path: '/products/human-centered-design',
      name: 'HumanCenteredDesignView',
      component: HumanCenteredDesignView
    },
    {
      path: '/products/coaching',
      name: 'CoachingView',
      component: CoachingView
    },
    {
      path: '/products/joint-management',
      name: 'JointManagementView',
      component: JointManagementView
    },
    {
      path: '/post',
      name: 'PostComponent',
      component: PostComponent
    },
    {
      path: '/posts',
      name: 'posts',
      component: PostsView
    },
    {
      path: '/posts/:id',
      name: 'post',
      component: PostComponent
    },
    {
      path: '/contact',
      name: 'contact',
      component: ContactView
    }
  ]
})

// Agregar gancho de navegación global
router.beforeEach((to, from, next) => {
  // Desplazarse a la parte superior de la página
  window.scrollTo(0, 0)
  // Continuar navegación
  next()
})

export default router;