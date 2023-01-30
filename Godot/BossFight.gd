extends Node2D

onready var hud =  $HUD
onready var obstacle_spawner = $ObstacleSpawner

onready var menu_layer = $MenuLayer
var motion = Vector2()
onready var FireSkullSpawn = $FireSkullSpawner
onready var HorseSpawner = $HorseSpawner
onready var HoundSpawner = $HoundSpawner
var spawnrock = false
var spawnportal = false
const SAVE_FILE_PATH = "user://savedata.save"

var score = 0 setget set_score
var highscore = 0
func _ready():
	obstacle_spawner.connect("obstacle_created", self, "_on_obstacle_created")
	load_highscore()
	




func new_game():
	self.score = 0
	obstacle_spawner.start()
	FireSkullSpawn.start()
	HoundSpawner.start()
	HorseSpawner.start()
	

func player_score():
	self.score += 1

func set_score(new_score):
	score = new_score
	hud.update_score(score)

func _on_obstacle_created(obs):
	obs.connect("score", self, "player_score")


func _on_DeathZone_body_entered(body):
	if body is Player:
		if body.has_method("die"):
			body.die()

func _on_Player_died():
	game_over()
	
func game_over():
	obstacle_spawner.stop()
	HorseSpawner.stop()
	HoundSpawner.stop()
	FireSkullSpawn.stop()

	get_tree().call_group("obstacles", "set_physics_process", false)
	menu_layer.init_game_over_menu(score,highscore)


	if score > highscore:
		highscore = score
		save_highscore()
	
	
	menu_layer.init_game_over_menu(score, highscore)

func _on_MenuLayer_start_game():
 new_game()

func save_highscore():
	var save_data = File.new()
	save_data.open(SAVE_FILE_PATH, File.WRITE)
	save_data.store_var(highscore)
	save_data.close()
	
func load_highscore():     
	var save_data = File.new()
	if save_data.file_exists(SAVE_FILE_PATH):
		save_data.open(SAVE_FILE_PATH,File.READ)
		highscore = save_data.get_var()
		save_data.close()

		

func _on_Area2D_body_entered(body):
	if body is Player:
		if body.has_method("die"):
			body.die()


func _on_ceiling_body_entered(body):
	if body is Player:
		if body.has_method("die"):
			body.die()

func stop_obstacle():
	if spawnportal == true:
		obstacle_spawner.stop()


func _on_Obstacle_timeout():
  obstacle_spawner.stop()



