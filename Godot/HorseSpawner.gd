extends Node2D

signal obstacle_created(obs)

onready var timer = $Timer

var Obstacle = preload("res://Enemies/Horse.tscn")

func _ready():
	randomize()


func spawn_obstacle():
	var obstacle = Obstacle.instance()     
	add_child(obstacle)
	obstacle.position.y = randi()%170+120
	emit_signal("obstacle_created", obstacle)

func start():
	timer.start()

func stop():
	timer.stop()




func _on_Timer_timeout():
	spawn_obstacle()
