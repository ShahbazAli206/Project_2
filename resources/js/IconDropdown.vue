<template>
    <div>
      <select v-model="selectedIcon">
        <option value="">Select an icon</option>
        <option v-for="icon in icons" :value="icon">{{ icon }}</option>
      </select>
    </div>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  import '@fortawesome/fontawesome-free/css/all.css'; // Import Font Awesome CSS
  
  export default {
    name: 'IconDropdown',
    setup() {
      const icons = ref([]);
      const selectedIcon = ref('');
  
      // Fetch icons from the Font Awesome CSS
      const fetchIcons = () => {
        try {
            console.error('tryinggg fetching icons:');

          const iconClasses = Array.from(
            document.querySelectorAll('.fa')
          ).map((el) => el.classList[1]);
          icons.value = iconClasses;
        } catch (error) {
          console.error('Error fetching icons:', error);
        }
      };
  
      onMounted(() => {
        fetchIcons();
      });
  
      return { icons, selectedIcon };
    },
  };
  </script>
  