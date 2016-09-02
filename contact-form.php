<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '/home/bitcodeweb/public_html/efemerides/phpmailer/PHPMailerAutoload.php';

if (isset($_POST['p0'])) {
    if (empty($_POST['p0'])) {
        $data = array('success' => false, 'message' => 'Por favor, llene el formulario.');
        echo json_encode($data);
        exit;
    }
    
    $p0='';
    $p10='';
    $mensaje='';


    if (isset($_POST['p0'])) {
        if (!empty($_POST['p0'])) {
            $p0=$_POST['p0'];
        }
    }
    if (isset($_POST['p10'])) {
        if (!empty($_POST['p10'])) {
            $p10=$_POST['p10'];
        }
    }


     $e1='1 de enero: Año Nuevo.';
     $e2='1 de enero: Se establece el Matrimonio Civil en Venezuela.';
     $e3='1 de enero: Día Internacional de la Paz.';
     $e4='3 de enero: Ascenso de Alejandro de Humboldt y Aimé Bonpland al pico El Ávila.';
     $e5='5 de enero: Día de la Industria Farmacéutica.';
     $e6='6 de enero: Inauguración del Puente de Angostura.';
     $e7='6 de enero: Día de los Reyes Magos.';
     $e8='6 de enero: Día del Deporte.';
     $e9='13 de enero: Fundación del partido COPEI.';
     $e10='13 de enero: Día del Artista Nacional.';
     $e11='14 de enero: Día de la Divina Pastora.';
     $e12='15 de enero: Día del Maestro.';
     $e13='18 de enero: Muere Ascensión Farreras.';
     $e14='19 de enero: Fundación de Ciudad Ojeda.';
     $e15='19 de enero: Fundación del Movimiento al Socialismo (MAS).';
     $e16='20 de enero: Día del Pediatra.';
     $e17='23 de enero: Fin de la dictadura de Marcos Pérez Jiménez y entra en vigencia la Constitución de 1961.';
     $e18='24 de enero: Natalicio de Rafael Caldera.';
     $e19='25 de enero: Natalicio de Manuel Cabré: El Pintor del Ávila.';
     $e20='27 de enero: Día Internacional de Conmemoración anual en memoria de las víctimas del Holocausto.';
     $e21='28 de enero: Declaración de la Independencia de Maracaibo.';
     $e22='28 de enero: Día Nacional del Cine.';
     $e23='29 de enero: Día del Trabajador Social.';
     $e24='30 de enero: Día del Radio Aficionado.';
     $e25='31 de enero: Muere José Félix Ribas.';
     $e26='31 de enero: Día del Internacionalista.';
     $e27='1 de febrero: Fundación de Cumaná.';
     $e28='1 de febrero: Nacimiento de Ezequiel Zamora.';
     $e29='2 de febrero: Día de la Virgen de La Candelaria.';
     $e30='3 de febrero: Natalicio del Mariscal Antonio José de Sucre.';
     $e31='4 de febrero: Golpe de Estado de 1992.';
     $e32='4 de febrero: Día Mundial contra el Cáncer.';
     $e33='6 de febrero: Día Internacional de Tolerancia Cero con la Mutilación Genital Femenina.';
     $e34='8 de febrero: Muere Cristóbal Mendoza (Primer Presidente de Venezuela).';
     $e35='9 de febrero: Día del Dentista.';
     $e36='10 de febrero: Simón Bolívar es nombrado Dictador del Perú.';
     $e37='11 de febrero: Día del Antropólogo.';
     $e38='11 de febrero: Día del Sociólogo.';
     $e39='12 de febrero: Día de la Juventud.';
     $e40='12 de febrero: Fundación de Barcelona.';
     $e41='13 febrero: Día Mundial de la Radio.';
     $e42='14 de febrero: Día de San Valentín.';
     $e43='14 de febrero: Día del Telegrafista.';
     $e44='15 de febrero: Discurso de Angostura.';
     $e45='17 de febrero: El Acuerdo de Ginebra.';
     $e46='20 de febrero: El gobierno se muda desde Angostura hacia la ciudad de Cúcuta.';
     $e47='20 de febrero: Día de la Federación.';
     $e48='20 de febrero: Inicio de la Guerra Federal.';
     $e49='20 de febrero: Inauguración del Museo de Bellas Artes.';
     $e50='20 de febrero: Día Mundial de la Justicia Social.';
     $e51='21 de febrero: Día Internacional de la Lengua Materna.';
     $e52='22 de febrero: Muere Américo Vespucio.';
     $e53='22 de febrero: Natalicio de Rómulo Betancourt.';
     $e54='23 de febrero: Día de Los Peritos y Técnicos Industriales.';
     $e55='25 de febrero: Muere Jacinto Lara.';
     $e56='27 de febrero: Muere José Laurencio Silva.';
     $e57='27 de febrero: Se produce el Estallido social del 27 de febrero de 1989.';
     $e58='28 de febrero: Muere Simón Rodríguez.';
     $e59='28 de febrero: Natalicio de Antonio Guzmán Blanco.';
     $e60='28 de febrero: Fundación de San Fernando de Apure.';
     $e61='1 de marzo: Fundación de San Carlos.';
     $e62='1 de marzo: Día contra la Discriminación.';
     $e63='2 de marzo: Primer Congreso de Venezuela.';
     $e64='3 de marzo: Día Mundial de la Naturaleza.';
     $e65='5 de marzo: Revolución de Marzo.';
     $e66='5 de marzo: Día del Campesino.';
     $e67='5 de marzo: Muere Hugo Chávez.';
     $e68='8 de marzo: Día Internacional de la Mujer.';
     $e69='9 de marzo: Natalicio de Américo Vespucio.';
     $e70='10 de marzo: Natalicio de Juan José Landaeta.';
     $e71='10 de marzo: Natalicio de José María Vargas.';
     $e72='10 de marzo: Día del Médico.';
     $e73='11 de marzo: Revolución Legalista.';
     $e74='13 de marzo: Día de La Industria Nacional.';
     $e75='14 de marzo: Día Nacional del Pescador y El Pescador Artesanal.';
     $e76='15 de marzo: Natalicio de Juan Bautista Arismendi.';
     $e77='16 de marzo: Muere Renny Ottolina.';
     $e78='18 de marzo: Creación de la Provincia de Margarita.';
     $e79='18 de marzo: Día del Comerciante.';
     $e80='19 de marzo: Día de San José.';
     $e81='19 de marzo: Día del Carpintero.';
     $e82='20 de marzo: Día de la Lengua Francesa.';
     $e83='20 de marzo: Día Internacional de la Felicidad.';
     $e84='21 de marzo: Día Internacional de la Eliminación de la Discriminación Racial.';
     $e85='21 de marzo: Día Mundial de la Poesía.';
     $e86='21 de marzo: Día Internacional del Nowruz.';
     $e87='21 de marzo: Día Mundial del Síndrome de Down.';
     $e88='21 de marzo: Día Internacional de los Bosques.';
     $e89='21 al 27 de marzo: Semana de solidaridad con los pueblos que luchan contra el racismo y la discriminación racial.';
     $e90='22 de marzo: Día Mundial del Agua.';
     $e91='23 de marzo: Natalicio de Jóvito Villalba.';
     $e92='23 de marzo: Creación de la Sociedad Bolivariana de Venezuela.';
     $e93='23 de marzo: Día Meteorológico Mundial.';
     $e94='24 de marzo: Abolición de la esclavitud en Venezuela.';
     $e95='24 de marzo: Día Internacional del Derecho a la Verdad en relación con Violaciones Graves de los Derechos Humanos y de la Dignidad de las Víctimas.';
     $e96='24 de marzo: Día Mundial Contra la Tuberculosis.';
     $e97='25 de marzo: Fundación de Valencia.';
     $e98='25 de marzo: Día internacional de Solidaridad con los miembros del personal detenidos o desaparecidos.';
     $e99='25 de marzo: Día Internacional de Rememoración de las Víctimas de la Esclavitud y la Trata Transatlántica de Esclavos.';
     $e100='26 de marzo: Fundación de La Asunción.';
     $e101='26 de marzo: Terremoto de 1812.';
     $e102='27 de marzo: Día Internacional del Teatro.';
     $e103='28 de marzo: Natalicio de Francisco de Miranda.';
     $e104='28 de marzo: Día Nacional del Patrimonio Cultural.';
     $e105='2 de abril: Día Mundial de la Concientización sobre el Autismo.';
     $e106='4 de abril: Día Internacional de información sobre el peligro de las minas y de asistencia para las actividades relativas a las minas.';
     $e107='5 de abril: Muere Rómulo Gallegos.';
     $e108='6 de abril: Día Internacional del Deporte para el Desarrollo y la Paz.';
     $e109='7 de abril: Sublevación del movimiento estudiantil contra Juan Vicente Gómez.';
     $e110='7 de abril: Día Mundial de la Salud.';
     $e111='9 de abril: Convención de Ocaña.';
     $e112='10 de abril: Día del Asistente Dental.';
     $e113='10 de abril: Muere Lisandro Alvarado.';
     $e114='12 de abril: Día del Obstetra.';
     $e115='12 de abril: Día Internacional de los Vuelos Espaciales Tripulados.';
     $e116='14 de abril: Día del Panamericano.';
     $e117='16 de abril: Día Mundial de la Voz.';
     $e118='17 de abril: Día del Joven Explorador.';
     $e119='18 de abril: Creado y Legislado el Escudo de Venezuela.';
     $e120='18 de abril: Día de la Ciudadanía.';
     $e121='19 de abril: Proclamación de la Independencia de Venezuela 19 de abril de 1810.';
     $e122='19 de abril: Día de la Municipalidad.';
     $e123='19 de abril: Día de la Lengua China.';
     $e124='22 de abril: Día de La Tierra.';
     $e125='23 de abril: Día Mundial del Libro y del Derecho de Autor.';
     $e126='23 de abril: Día de la Lengua Inglesa.';
     $e127='23 de abril: Día Internacional de la Cerveza.';
     $e128='24 de abril: El Tratado o Convenio de Coche.';
     $e129='24 de abril: Día del Caficultor.';
     $e130='25 de abril: Natalicio de Marcos Pérez Jiménez.';
     $e131='25 de abril: Día del Bioanalista.';
     $e132='25 de abril: Día Mundial del Paludismo.';
     $e133='26 de abril: Día Internacional del Humor.';
     $e134='26 de abril: Día Mundial de la Propiedad Intelectual.';
     $e135='28 de abril: Día del Sacerdote.';
     $e139='28 de abril: Día Internacional de la Seguridad y Salud en el Trabajo.';
     $e136='28 de abril: Día de la Industria Nacional del Hierro y el Petróleo.';
     $e137='29 de abril: Día Internacional de la Danza.';
     $e138='29 de abril: Día de Conmemoración de todas las víctimas de la guerra química.';
     $e140='30 de abril: Día Internacional del Jazz.';
     $e141='1 de mayo: Día del Trabajador.';
     $e142='3 de mayo: Fundación de Santa Cruz primera ciudad de Venezuela.';
     $e143='3 de mayo: Día de la Cruz de Mayo.';
     $e144='3 de mayo: Día Mundial de la Libertad de Prensa.';
     $e145='5 de mayo: Natalicio de Eleazar López Contreras.';
     $e146='6 de mayo: Congreso de Valencia.';
     $e147='6 de mayo: Muere José Antonio Páez.';
     $e148='6 de mayo: Día del Reportero Gráfico.';
     $e149='8 de mayo: Día del Entrenador Deportivo.';
     $e150='8 de mayo: Día Internacional de la Cruz Roja.';
     $e151='10 de mayo: Día del Artista Plástico.';
     $e152='11 y 12 de mayo: Día Mundial de las Aves Migratorias.';
     $e153='12 de mayo: Día de la Enfermera.';
     $e154='15 de mayo: Día del Compositor.';
     $e155='15 de mayo: Día Internacional de la Familia.';
     $e156='16 de mayo: Natalicio de Arturo Uslar Pietri.';
     $e157='17 de mayo: Día Mundial de las Telecomunicaciones y la Sociedad de la Información.';
     $e158='17 de mayo: Día Mundial de Internet.';
     $e159='17 de mayo: Día del Contador Publico.';
     $e160='20 de mayo: Muerte del Almirante Cristóbal Colón.';
     $e161='20 de mayo: Día de la Radio en Venezuela.';
     $e162='20 de mayo: Día del Publicista.';
     $e163='20 de mayo: Día Nacional del Cronista.';
     $e164='21 de mayo: Muerte de Andrés Eloy Blanco.';
     $e165='21 de mayo: Día de la Salud Visual.';
     $e166='21 de mayo: Día del Optometrista.';
     $e167='21 de mayo: Día Mundial de la Diversidad Cultural para el Diálogo y el Desarrollo.';
     $e168='22 de mayo: Ratificación del Tratado de Coche.';
     $e169='22 de mayo: Nace Ciudad Bolívar.';
     $e170='22 de mayo: Día Internacional de la Diversidad Biológica.';
     $e171='23 de mayo: Declarada La Orquídea Flor Nacional.';
     $e172='25 de mayo: Es adoptado el “Gloria al Bravo Pueblo” como Himno Nacional de Venezuela.';
     $e173='25 de mayo: Fundación de Barinas.';
     $e174='25 de mayo: Día de África.';
     $e175='26 de mayo: Matrimonio de Simón Bolívar.';
     $e176='27 de mayo: Natalicio de Jaime Lusinchi.';
     $e177='28 de mayo: Natalicio de Jacinto Lara.';
     $e178='29 de mayo: Declarado el Araguaney como Árbol Nacional.';
     $e179='29 de mayo: Día del Anciano.';
     $e180='29 de mayo: Día Internacional del Personal de Paz de las Naciones Unidas.';
     $e181='30 de mayo: Día del Geógrafo.';
     $e182='31 de mayo: Día Mundial de No Fumar.';
     $e183='Nota: Segundo domingo de mayo Día de las Madres.';
     $e184='1 de junio: Día Mundial de las Madres y los Padres.';
     $e185='4 de junio: Día del Optometrista Venezolano.';
     $e186='4 de junio: Día Internacional de los Niños Víctimas Inocentes de Agresión.';
     $e187='4 de junio: Asesinato de Antonio José de Sucre.';
     $e188='5 de junio: Día Internacional del Ambiente.';
     $e189='6 de junio: Día de la Lengua Rusa.';
     $e190='8 de junio: Día Mundial de los Océanos.';
     $e191='12 de junio: Día Mundial contra el Trabajo Infantil.';
     $e192='13 de junio: Natalicio de José Antonio Páez.';
     $e193='14 de junio: Día Mundial del Donante de Sangre.';
     $e194='15 de junio: Proclama de Guerra a Muerte.';
     $e195='15 de junio: Día Mundial de Toma de Conciencia de Abuso y Maltrato en la Vejez.';
     $e196='16 de junio: Natalicio de Arturo Michelena.';
     $e197='17 de junio: Día Mundial de Lucha contra la Desertificación y la Sequía.';
     $e198='20 de junio: Día Mundial de los Refugiados.';
     $e199='22 de junio: Instalación del Congreso de Panamá.';
     $e200='22 de junio: Muere Juan Bautista Arismendi.';
     $e201='23 de junio: Natalicio de Cristóbal Mendoza Primer Presidente de Venezuela.';
     $e202='23 de junio: Día de las Naciones Unidas para la Administración Pública.';
     $e203='23 de junio: Día Internacional de las Viudas.';
     $e204='24 de junio: Batalla de Carabobo.';
     $e205='24 de junio: Día del Ejército.';
     $e206='24 de junio: Muerte de Pedro Camejo, “Negro Primero”.';
     $e207='25 de junio: Día de la Gente de Mar.';
     $e208='26 de junio: Día Internacional en Apoyo de las Víctimas de la Tortura.';
     $e209='26 de junio: Día Internacional de la Lucha contra el Uso Indebido y el Tráfico Ilícito de Drogas.';
     $e210='27 de junio: Se funda El Correo del Orinoco.';
     $e211='27 de junio: Guzmán Blanco Decreta la Instrucción Pública Gratuita y Obligatoria para todos los venezolanos.';
     $e212='27 de junio: Día Nacional del Periodista.';
     $e213='28 de junio: Día Nacional del Teatro.';
     $e214='29 de junio: Muere José Gregorio Hernández.';
     $e215='Nota: Tercer domingo de junio Día del Padre.';
     $e216='1 de julio: Proclamado los Derechos del Pueblo.';
     $e217='4 de julio: Día del Arquitecto.';
     $e218='5 de julio: Firma del Acta de la Independencia 5 de julio de 1811.';
     $e219='5 de julio: Día Internacional de las Cooperativas.';
     $e220='6 de julio: Natalicio de Isaías Medina Angarita.';
     $e221='6 de julio: Reforma del Código Civil.';
     $e222='11 de julio: Natalicio de Juan Lovera “El pintor de los Próceres”.';
     $e223='11 de julio: Día Mundial de la Población.';
     $e224='13 de julio: Creación de la Biblioteca Nacional de Venezuela (BNV).';
     $e225='14 de julio: Muere Francisco de Miranda.';
     $e226='16 de julio: Día de la Virgen del Carmen.';
     $e227='16 de julio: Día del Defensor Público.';
     $e228='18 de julio: Día Internacional de Nelson Mandela.';
     $e229='21 de julio: Día del Médico Veterinario.';
     $e230='24 de julio: Natalicio del Libertador Simón Bolívar.';
     $e231='24 de julio: Día de la Armada Venezolana.';
     $e232='26 de julio: Fundación de la Ciudad de Coro.';
     $e234='27 de julio: Día del Bibliotecólogo y Archivólogo.';
     $e235='28 de julio: Nace Hugo Rafael Chávez Frías.';
     $e236='28 de julio: Día Mundial contra la Hepatitis.';
     $e237='29 de julio: Terremoto de Caracas 1967.';
     $e238='29 de julio: Muere Arturo Michelena.';
     $e239='30 de julio: Día Internacional de la Amistad.';
     $e240='Nota: Tercer domingo de julio Día del Niño.';
     $e241='2 de agosto: Natalicio de Rómulo Gallegos.';
     $e242='2 de agosto: Cristóbal Colón llega a Venezuela.';
     $e243='3 de agosto: Día de la Bandera Nacional de Venezuela.';
     $e244='4 de agosto: Fundación de la Guardia Nacional.';
     $e245='6 de agosto: Creación de Bolivia.';
     $e246='6 de agosto: Natalicio de Andrés Eloy Blanco.';
     $e247='9 de agosto: Día Internacional de los Pueblos Indígenas.';
     $e248='12 de agosto: Día Internacional de la Juventud.';
     $e249='19 de agosto: Día Mundial de la Asistencia Humanitaria.';
     $e250='20 de agosto: Día Nacional del Bombero.';
     $e251='23 de agosto: Día Internacional del Recuerdo de la Trata de Esclavos y de su Abolición.';
     $e252='24 de agosto: Descubrimiento del Lago de Maracaibo.';
     $e253='26 de agosto: Día del Licenciado en Administración.';
     $e254='29 de agosto: Nacionalización del Petróleo.';
     $e255='29 de agosto: Día Internacional contra los Ensayos Nucleares.';
     $e256='30 de agosto: Día Internacional de las Víctimas ';
     $e257='2 de septiembre: Fundación del Banco de Venezuela.';
     $e258='4 de septiembre: Día del Empleado Público.';
     $e259='5 de septiembre: Día Internacional de la Beneficencia.';
     $e260='6 de septiembre: La Carta de Jamaica.';
     $e261='7 de septiembre: Día del Controlador Aéreo.';
     $e262='8 de septiembre: Festividad de la Virgen del Valle.';
     $e263='8 de septiembre: Fundación del Banco Central de Venezuela.';
     $e264='8 de septiembre: Fundación de Maracaibo.';
     $e265='8 de septiembre: Día Mundial de Alfabetización.';
     $e266='10 de septiembre: Fundación de la OPEP.';
     $e267='10 de septiembre: Día Mundial para la Prevención de Suicidio.';
     $e268='11 de septiembre: Festividad de la Virgen de Coromoto.';
     $e269='13 de septiembre: Fundación de Acción Democrática (AD).';
     $e270='14 de septiembre: Natalicio de Alejandro de Humboldt.';
     $e271='14 de septiembre: Fundación de Barquisimeto.';
     $e272='15 de septiembre: Muere Isaías Medina Angarita.';
     $e273='15 de septiembre: Día Internacional de la Democracia.';
     $e274='16 de septiembre: Día Internacional de La Preservación de La Capa De Ozono.';
     $e275='18 de septiembre: Natalicio de José Tomás Boves.';
     $e276='19 de septiembre: Natalicio de José Félix Ribas.';
     $e277='19 de septiembre: Natalicio de Lisandro Alvarado.';
     $e278='19 de septiembre: Día Mundial del Alzheimer.';
     $e279='20 de septiembre: Muere Marcos Pérez Jiménez.';
     $e280='21 de septiembre: Natalicio de Matea Bolívar (La Negra Matea).';
     $e281='21 de septiembre: Día Internacional de la Paz.';
     $e282='22 de septiembre: Día del Electricista.';
     $e283='23 de septiembre: Natalicio de Fermín Toro.';
     $e284='25 de septiembre: Día Marítimo Mundial.';
     $e285='26 de septiembre: Día Interamericano de las Relaciones Públicas.';
     $e286='27 de septiembre: Día Mundial del Turismo.';
     $e287='27 de septiembre: Día Nacional del Licenciado en Contaduría Pública.';
     $e288='28 de septiembre: Muere Rómulo Betancourt.';
     $e289='28 de septiembre: Día Mundial del Acceso a la Información.';
     $e290='30 de septiembre: Día de La Secretaria.';
     $e291='1 de octubre: Día Mundial del Hábitat y Día Internacional de las Personas de Edad.';
     $e292='1 de octubre: Día Internacional de las Personas de Edad.';
     $e293='2 de octubre: Día del Dietista y Nutricionista.';
     $e294='2 de octubre: Día Internacional de la No Violencia.';
     $e295='3 de octubre: Día del Odontólogo.';
     $e296='4 de octubre: Día Mundial de Los Animales.';
     $e297='4 al 12 de octubre: Semana Mundial del Espacio.';
     $e298='5 de octubre: Día Mundial de los Docentes.';
     $e299='6 de octubre: Día Internacional del Agua.';
     $e300='6 de octubre: Día Mundial del Hábitat.';
     $e301='7 de octubre: Festividad de la Virgen del Rosario.';
     $e302='7 de octubre: Muere María Antonia Bolívar Palacios.';
     $e303='9 de octubre: Fundación de Trujillo.';
     $e304='9 de octubre: Fundación de Mérida.';
     $e305='9 de octubre: Día Mundial del Correo.';
     $e306='10 de octubre: Día del Soldado Venezolano.';
     $e307='10 de octubre: Día del Oftalmólogo.';
     $e308='11 de octubre: Día Internacional de la Niña.';
     $e309='12 de octubre: Día de la Resistencia Indígena o Día de la Raza.';
     $e310='12 de octubre: Natalicio de Cipriano Castro.';
     $e311='12 de octubre: Festividad de la Virgen del Pilar.';
     $e312='12 de octubre: Día de la Lengua Española.';
     $e313='13 de octubre: Día Internacional para la Reducción de los Desastres.';
     $e314='14 de octubre: Simón Bolívar recibe el titulo de “Libertador de Venezuela”.';
     $e315='15 de octubre: Muere Andrés Bello.';
     $e316='15 de octubre: Día Internacional de las Mujeres Rurales.';
     $e317='16 de octubre: Día de la Alimentación.';
     $e318='17 de octubre: Día Internacional para la Erradicación de la Pobreza.';
     $e319='18 de octubre: Golpe de estado contra Medina Angarita 1945.';
     $e320='24 de octubre: Natalicio de Rafael Urdaneta.';
     $e321='24 de octubre: Día de las Naciones Unidas.';
     $e322='24 de octubre: Día Mundial de Información sobre el Desarrollo.';
     $e323='26 de octubre: Natalicio de José Gregorio Hernández.';
     $e324='27 de octubre: Natalicio de Carlos Andrés Pérez.';
     $e325='27 de octubre: Día Mundial del Patrimonio Audiovisual.';
     $e326='28 de octubre: Natalicio de Simón Rodríguez.';
     $e327='28 de octubre: Inauguración del Panteón Nacional.';
     $e328='28 de octubre: Día del Ingeniero.';
     $e329='31 de octubre: Pacto de Punto Fijo.';
     $e330='31 de octubre: Natalicio de Alí Primera.';
     $e331='1 de noviembre: Día de todos Los Santos.';
     $e332='2 de noviembre: Día Internacional para Poner Fin a la Impunidad de los Crímenes contra Periodistas.';
     $e333='3 de noviembre: Fundación de Guanare.';
     $e334='6 de noviembre: Día Internacional para la Prevención de la Explotación del Medio Ambiente en la Guerra y los Conflictos Armados.';
     $e335='8 de noviembre: Día Mundial de la Radiología.';
     $e336='8 de noviembre: Día Mundial del Urbanismo.';
     $e337='10 de noviembre: Día Mundial de la Ciencia para la Paz y el Desarrollo.';
     $e338='11 al 17 de noviembre: Semana Internacional de la Ciencia y la Paz.';
     $e339='14 de noviembre: Día Mundial de la Diabetes.';
     $e340='16 de noviembre: Día Internacional para la Tolerancia.';
     $e341='16 de noviembre: Día Mundial en recuerdo de las víctimas de los accidentes de tráfico.';
     $e342='17 de noviembre: Día del Economista.';
     $e343='18 de noviembre: Día de la Chinita.';
     $e344='19 de noviembre: Día Mundial del Retrete.';
     $e345='20 de noviembre: Día Internacional de Los Derechos del Niño.';
     $e346='20 de noviembre: Día Mundial de la Filosofía.';
     $e347='21 de noviembre: Día Mundial de la Televisión.';
     $e348='21 de noviembre: Día del Estudiante Universitario.';
     $e349='22 de noviembre: Día del Psicólogo.';
     $e350='22 de noviembre: Día Internacional del Músico.';
     $e351='23 de noviembre: Nacional del Transportista.';
     $e352='24 de noviembre: Golpe de Estado de 1948.';
     $e353='25 de noviembre: Día Internacional de la Eliminación de La Violencia contra la Mujer.';
     $e354='27 de noviembre: Descubrimiento de las fuentes del Orinoco.';
     $e355='27 de noviembre: Golpe de Estado de 1992.';
     $e356='27 de noviembre: Día de la Aviación Militar Nacional Bolivariana.';
     $e357='29 de noviembre: Natalicio de Andrés Bello.';
     $e358='29 de noviembre: Día del Escritor.';
     $e359='1 de diciembre: Día del Farmacéutico.';
     $e360='1 de diciembre: Día Mundial de la lucha contra el SIDA.';
     $e361='2 de diciembre: Día Internacional para la Abolición de la Esclavitud.';
     $e362='3 de diciembre: Internacional de las Personas con Discapacidad.';
     $e363='4 de diciembre: Día de Santa Bárbara.';
     $e364='5 de diciembre: Día del Profesor Universitario.';
     $e365='5 de diciembre: Día de la Sonrisa.';
     $e366='5 de diciembre: Día Internacional de los Voluntarios.';
     $e367='5 de diciembre: Día Mundial del Suelo.';
     $e368='7 de diciembre: Fundación del Tocuyo.';
     $e369='7 de diciembre: Fundación de Maturín.';
     $e370='7 de diciembre: Día de la Aviación Civil Internacional.';
     $e371='8 de diciembre: Día de la Inmaculada Concepción.';
     $e372='9 de diciembre: Batalla de Ayacucho.';
     $e373='9 de diciembre: Día Internacional contra la Corrupción.';
     $e374='10 de diciembre: Día de la Declaración Universal de los Derechos Humanos.';
     $e375='11 de diciembre: Día Nacional del Locutor.';
     $e376='11 de diciembre: Día Internacional de las Montañas.';
     $e377='12 de diciembre: Día de Nuestra Señora de Guadalupe.';
     $e378='15 de diciembre: Manifiesto de Cartagena.';
     $e379='15 de diciembre: Referéndum aprobatorio de la Constitución de 1999.';
     $e380='16 de diciembre: Día del Dibujante.';
     $e381='17 de diciembre: Se decreta la creación de la Gran Colombia.';
     $e382='17 de diciembre: Muere Juan Vicente Gómez.';
     $e383='17 de diciembre: Muere Simón Bolívar.';
     $e384='18 de diciembre: Día Internacional del Migrante.';
     $e385='20 de diciembre: Día Internacional de la Solidaridad Humana.';
     $e386='21 de diciembre: Se funda la ciudad de Santo Tomé de Guayana, actual Ciudad Bolívar.';
     $e387='22 de diciembre: Natalicio de Teresa Carreño.';
     $e388='23 de diciembre: Muere Fermín Toro.';
     $e389='24 de diciembre: Muere Rafael Caldera.';
     $e390='25 de diciembre: Natividad de Nuestro Señor Jesucristo.';
     $e391='28 de diciembre: Día de los Santos Inocentes.';




    for ($i = 1; $i < 392 ; $i++) {

        if (isset($_POST[$i])) {
            if (!empty($_POST[$i])) {

                $mensaje=$mensaje.'

                 '.$i.') '.${'e'.$i}.'
                 '.$_POST[$i];
            }
        }
    }

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';                      
    $mail->From = 'bitcodemail@gmail.com';
    $mail->FromName = 'Efemérides';
    $mail->AddAddress('bitcodemail@gmail.com');
    $mail->Subject = 'Respuesta de Brief para RRSS';

    $mail->Body = 'Nombre 
        ' .$p0 . "\r\n\r\n" . $mensaje . "\r\n\r\n" .'
    Comentarios.
        ' . $p10;


    if(!$mail->send()) {
        $data = array('success' => false, 'message' => 'No se pudo enviar. Mailer Error: ' . $mail->ErrorInfo);
        echo json_encode($data);
        exit;
    }

    $data = array('success' => true, 'message' => '¡Cuestionario enviado!');
    echo json_encode($data);

} else {
    $data = array('success' => false, 'message' => 'Por favor, termine de llenar el formulario.');
    echo json_encode($data);
}
?>