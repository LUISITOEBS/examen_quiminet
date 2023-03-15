import { useEffect, useState } from "react"
import clienteAxios from "./axios/clienteAxios"

export const ArrayApp = () => {

    const [numeros, setNumeros] = useState([]);
    
    const consumirAPI = async() => {
        const {data} = await clienteAxios.get('?numeros=20');
        setNumeros(data);
    }

    const par = (numero) => {
        if(numero % 2 === 0){
            return 'par';
        }
        return 'impar';
    }

    const primo = (numero) => {
        for (let i = 2; i < numero; i++) {
            if ((numero % i) == 0) {
                return '';
            }
        }
        return 'primos';
    }

    console.log(numeros);

    useEffect(() => {
      consumirAPI();
    }, [])
    
    return (
        <>
            <h1>Generador de arrays en PHP</h1>
            {
                numeros.map( (numero, index) => {
                    return (
                        <p key={index}>{ numero } --- { par(numero) } { primo(numero) } </p>
                    )
                })
            }
        </>
    )
}
