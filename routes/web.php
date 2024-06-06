<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CamioneroController;

Route::get('/', function () {
    return  view('welcome');
});

Route::prefix('camiones')->group(function () {
    Route::get('/', [CamionController::class, 'index'])->name('camiones.index');
    Route::get('/create', [CamionController::class, 'create'])->name('camiones.create');
    Route::post('/', [CamionController::class, 'store'])->name('camiones.store');
    Route::get('/{camion}', [CamionController::class, 'show'])->name('camiones.show');
    Route::get('/{camion}/edit', [CamionController::class, 'edit'])->name('camiones.edit');
    Route::put('/{camion}', [CamionController::class, 'update'])->name('camiones.update');
    Route::delete('/{camion}', [CamionController::class, 'destroy'])->name('camiones.destroy');
});

Route::resource('camioneros', CamioneroController::class)->except([
    'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
]);



//Uno a Uno (1:1):
//    - hasOne (en el modelo "uno")
//- belongsTo (en el modelo "uno")

    //Uno a Muchos (1:M):
//- hasMany (en el modelo "uno")
//- //belongsTo (en el modelo "muchos")

//Muchos a Muchos (M:N):
//- belongsToMany (en ambos modelos)



//php artisan tinker
// Crear una nueva instancia del modelo User
//$user = new App\Models\User;
//$user->name = 'John Doe';
//$user->email = 'john@example.com';
//$user->password = bcrypt('password');
//$user->save();





//class Comment extends Model
//{
    // ...

  //  public function user()
  //  {
  //      return $this->belongsTo(User::class);
 //   }

 //   public function post()
   // {
  //      return $this->belongsTo(Post::class);
 //   }
//}



