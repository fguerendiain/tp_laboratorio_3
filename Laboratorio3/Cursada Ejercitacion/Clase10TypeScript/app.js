var MAIN = (function (DATA) {

  var lib = {};

  /*
    realizar las operaciones usando los metosos map,  reduce y filter y combinaciones entre ellos
  */

  // Retornar una array de strings (el nombre de los usarios de sexo femenino)
  lib.femaleUsers = function () {
    return DATA
      .filter(function (user) {
        return user.gender === 'female';
      })
      .map(function (user) {
        return user.name;
      });
  };

  // Retornar una array de strings (el email de los usarios de sexo masculino)
  lib.maleUsersEmails = function () {
    return DATA
      .filter(function (user) {
        return user.gender === 'male';
      })
      .map(function (user) {
        return user.email;
      });

  };

  // Retornar un array de objetos que solo contengan las claves name, email y age, de todos los usuarios mayores que 'age'
  lib.userOlderThan = function (age) {
    return DATA.filter(function(user){
      return user.age > age;
    })
    .map(function (user){
      var obj;
      obj.name = user.name;
      obj.email = user.email;
      obj.age = user.age;
      return obj; 
    })};

  // Retornar un objeto que contenga solo el nombre y la edad (name y age) del usuario mas grande.
  lib.olderUser = function (age) {
    return DATA.reduce(userPrev,function(user){
        if(userPrev > user.age)
        {
            return userPrev
        }
        return user.age; 
  })
  .filter(function(age){
    return 
  })};

  // Retornar el promedio de edad de los usuarios (number)
  lib.userAgeAverage = function (age) {
    var counter = 0;
    var ages = DATA.reduce(function(anterior,actual){
      counter++;
      return anterior + actual.age;
    })
    return ages / counter;
  }, 0;

  // Retornar el promedio de edad de los usuarios hombres (number)
  lib.userMaleAgeAverage = function (age) {
    var counter = 0;
    var agesMen = DATA.filter(function(user){
      return user.gender === 'male';
    })
    .reduce(function(anterior, age){
      counter++;
      return anterior + age;
    },0)
    return agesMen / counter;
  };

  // Retornar el promedio de edad de los usuarios mujeres (number)
  lib.userFemaleAgeAverage = function (age) {
    var counter = 0;
    var agesMen = DATA.filter(function(user){
      return user.gender === 'female';
    })
    .reduce(function(anterior, age){
      counter++;
      return anterior + age;
    },0)
    return agesMen / counter;
  };

  // Retornar un objeto  de etiquetas (tags)
  // cada property del objeto es el nombre de una etiqueta
  // y el value es la cantidad de usuarios que tienene esa etiqueta
  lib.tagCloud = function (age) {

  };

  return lib;

})(DATA);
