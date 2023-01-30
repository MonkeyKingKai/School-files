extends Node2D
signal portal_created(obs)
onready var timer = $Timer
var seen = false	

var Portall = preload("res://Portall.tscn")

func _ready():
	randomize()
	
func spawn_portal():
	var portal = Portall.instance()     
	add_child(portal)
	portal.position.x = 977
	portal.position.y = 310 
	emit_signal("portal_created", portal)
	


func _on_Timer_timeout():
	spawn_portal()


func start():
	timer.start()

func stop():
	timer.stop()
	
	
	
