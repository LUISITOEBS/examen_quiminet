export const getEnvVariables = () => {
   import.meta.env.VITE;

   return {
      ...import.meta.env
   }
}