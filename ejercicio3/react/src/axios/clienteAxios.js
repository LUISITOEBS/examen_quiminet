import axios from 'axios';
import { getEnvVariables } from '../helper/getEnvVariables';

const { VITE_API_URL } = getEnvVariables();

const clienteAxios = axios.create({
   baseURL: VITE_API_URL,
});

//CONFIGURE INTERCEPTORS
clienteAxios.interceptors.request.use( config => {

   config.headers = {
      ...config.headers,
   }

   return config;
}); 



export default clienteAxios;