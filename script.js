       /**
 * Representa a una persona dentro del sistema.
 *
 * @constructor
 * @param {string} nombre - El nombre de pila de la persona.
 * @param {string} apellido - El apellido de la persona.
 * @param {number} edad - La edad de la persona en años.
 * @param {string} email - La dirección de correo electrónico.
 */
function Persona(nombre, apellido, edad, email) {
    /** @type {string} */
    this.Nombre = nombre;
    /** @type {string} */
    this.Apellido = apellido;
    /** @type {number} */
    this.Edad = edad;
    /** @type {string} */
    this.Email = email;
}

const persona1 = new Persona("Roberto", "Martínez", 22, "roberto.martinez@tuempresa.com");
const persona2 = new Persona("Antonio", "López", 25, "antonio.lopez@tuempresa.com");
const persona3 = new Persona("Javier", "Rodríguez", 18, "javier.rodriquez@tuempresa.com");
const persona4 = new Persona("Eva", "Teruel", 33, "eva.teruel@tuempresa.com");

const edades = [persona1.Edad, persona2.Edad, persona3.Edad, persona4.Edad];

/**
 * Calcula la media aritmética de cuatro valores numéricos.
 *
 * @param {number} a - Primer valor.
 * @param {number} b - Segundo valor.
 * @param {number} c - Tercer valor.
 * @param {number} d - Cuarto valor.
 * @returns {number} El promedio de los cuatro valores.
 */
const media = (a, b, c, d) => (a + b + c + d) / 4;

console.log("La media de edad de las cuatro personas es: " + media(...edades));
console.log("La media de las edades redondeado: " + Math.round(media(...edades)));