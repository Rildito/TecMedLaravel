<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollaborationsController;
use App\Http\Controllers\CorrespondenceController;
use App\Http\Controllers\InterestedController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MoneyBoxController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\SpentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    }); 
    Route::post('/logout', [AuthController::class, 'logout']);

    //Orders
    Route::get('/orders', [OrderController::class, 'getOrders']);
    Route::get('/orders/{id}', [OrderController::class, 'getOrderId']);
    Route::post('/orders', [OrderController::class, 'store']);
    Route::post('/orders/{id}', [OrderController::class, 'confirmOrder']);
    Route::delete('/orders/{id}', [OrderController::class, 'deleteOrder']); 

    //Correspondece

    Route::get('/correspondences/hojaDeRuta', [CorrespondenceController::class, 'getIdentificador']);
    Route::get('/correspondences/received', [CorrespondenceController::class, 'getCorrespondencesReceived']);
    Route::get('/correspondences/despachada', [CorrespondenceController::class, 'getCorrespondencesDespachada']);
    Route::get('/correspondences/recover', [CorrespondenceController::class, 'getCorrespondencesRecover']);
    Route::get('/correspondences/{id}', [CorrespondenceController::class, 'getCorrespondenceId']);
    Route::get('/correspondences/{id}/{id2}/{tipo}', [CorrespondenceController::class, 'getCorrespondenceDocument']);
    Route::post('/correspondences/recover/{id}', [CorrespondenceController::class, 'correspondenceRecover']);
    Route::post('/correspondences', [CorrespondenceController::class, 'createCorrespondence']);
    Route::post('/correspondences/{id}', [CorrespondenceController::class, 'editCorrespondence']);
    Route::delete('/correspondences/{id}', [CorrespondenceController::class, 'deleteCorrespondence']);
    Route::delete('/correspondences/recover/delete/{id}', [CorrespondenceController::class, 'confirmDeleteCorrespondence']);
    
    //Colaborators
    Route::post('/collaborators', [CollaborationsController::class, 'addCollaborator']);
    Route::get('/collaborators/{idCorrespondence}', [CollaborationsController::class, 'getCollaborators']);
    Route::get('/collaborator/{idCorrespondence}/{idUserCreator}', [CollaborationsController::class, 'getCollaborator']);
    Route::get('/collaborators/correspondences/{id}', [CollaborationsController::class, 'getCollaboratorsCorrespondences']);
    
    //Responses
    Route::get('/response/{idResponse}', [ResponseController::class, 'getResponse']);
    Route::post('/response', [ResponseController::class, 'createResponse']);
    Route::post('/response/edit/{idResponse}', [ResponseController::class, 'editResponse']);
    Route::delete('/response/{idResponse}', [ResponseController::class, 'deleteResponse']);

    //MoneyBox

    Route::get('/moneybox', [MoneyBoxController::class, 'getMoneyBox']);
    Route::get('/moneybox/history', [MoneyBoxController::class, 'getMoneyBoxHistory']);
    Route::get('/moneybox/{date1}/{date2}', [MoneyBoxController::class, 'getMoneyBoxRecopilation']);
    Route::put('/moneybox/{id}', [MoneyBoxController::class, 'editMoneyBox']);
    Route::patch('/moneybox/{id}', [MoneyBoxController::class, 'selectManager']);
    Route::patch('/moneybox/director/{id}', [MoneyBoxController::class, 'selectDirector']);

    //Reembolsos
    Route::get('/recharges', [RechargeController::class, 'getRecharges']);
    Route::get('/recharge', [RechargeController::class, 'getRecharge']);
    Route::post('/recharges/create', [RechargeController::class, 'createRecharge']);

    //Spents

    Route::get('/spents', [SpentController::class, 'getSpents']);
    Route::get('/spents/nroVale', [SpentController::class, 'getUltimateSpent']);
    Route::get('/spents/{id}', [SpentController::class, 'getSpentId']);
    Route::post('/spents', [SpentController::class, 'createSpent']);
    Route::put('/spents/{id}', [SpentController::class, 'editSpent']);
    Route::delete('/spents/{id}', [SpentController::class, 'deleteSpent']);

    //Interesteds

    Route::get('/interesteds', [InterestedController::class, 'getInteresteds']);
    Route::get('/interesteds/{id}', [InterestedController::class, 'getInterested']);
    Route::post('/interesteds', [InterestedController::class, 'createInterested']);
    Route::put('/interesteds/{id}', [InterestedController::class, 'editInterested']);
    Route::delete('/interesteds/{id}', [InterestedController::class, 'deleteInterested']);
    
    //Users
    Route::get('/users', [ UserController::class, 'getUsers']);
    Route::get('/users/activated', [ UserController::class, 'getUsersActivated']);
    Route::put('/users/activated/{id}', [ UserController::class, 'activatedUser']);
    Route::get('/users/{id}', [ UserController::class, 'getUser']);
    Route::post('/users/{id}', [ UserController::class, 'editUser']);
    Route::delete('/users/{id}', [ UserController::class, 'deleteUser']);
    Route::get('/collaborators-available/{id}', [UserController::class, 'getCollaboratorsAvailable']);
    
    //Subject
    Route::get('/subjects/{id}', [SubjectController::class, 'getSubject']);
    Route::post('/subjects', [SubjectController::class, 'createSubject']);
    Route::put('/subjects/{id}', [SubjectController::class, 'editSubject']);
    Route::delete('/subjects/{id}', [SubjectController::class, 'deleteSubject']);

    //Units

    Route::get('/units/{id}', [UnitController::class, 'getUnit']);
    Route::get('/units/selected/{unidad}', [UnitController::class, 'getUnitsSelected']);
    Route::post('/units', [UnitController::class, 'createUnit']);
    Route::put('/units/{id}', [UnitController::class, 'editUnit']);
    Route::delete('/units/{id}', [UnitController::class, 'deleteUnit']);

    //Teachers

    Route::get('/teachers/{id}', [TeacherController::class, 'getTeacher']);
    Route::post('/teachers', [TeacherController::class, 'createTeacher']);
    Route::put('/teachers/{id}', [TeacherController::class, 'editTeacher']);
    Route::delete('/teachers/{id}', [TeacherController::class, 'deleteTeacher']);

    //Materials

    Route::post('/materials', [MaterialController::class, 'createMaterial']);
    Route::post('/materials/{id}', [MaterialController::class, 'editMaterial']);
    Route::delete('/materials/{id}', [MaterialController::class, 'deleteMaterial']);

    //Encargados

    Route::get('/managers', [UserController::class, 'getAdministrativos']); 

    //RegisterAdmin

    Route::post('/registroUsuario',[UserController::class,'createUser']);

});


//Autenticacion
Route::post('/registro', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/recuperar-contrasenia', [AuthController::class, 'recover_password']);
Route::post('/reestablecer-contrasenia', [AuthController::class, 'upgrade_password']);

//Materials
Route::get('/materials', [MaterialController::class, 'getMaterials']);
Route::get('/materials/{id}', [MaterialController::class, 'getMaterialId']);

//Seeders
Route::get('/teachers', [TeacherController::class, 'getTeachers']);
Route::get('/subjects', [SubjectController::class, 'getSubjects']);

//Unidades
Route::get('/units', [UnitController::class, 'getUnits']);
