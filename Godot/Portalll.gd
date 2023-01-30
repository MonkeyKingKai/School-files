extends Area2D
export var verticalspeed = 400.0

var entered = false
var seen = false 

func _physics_process(delta):
	position.x -= verticalspeed * delta
	if entered == true:
			if Input.is_action_just_pressed("Accept"):
				SceneTransition.change_scene("res://BossFight.tscn") 


func _on_VisibilityNotifier2D_screen_exited():
	queue_free()



func _on_Area2D_body_entered(body):
	entered = true 


func _on_Area2D_body_exited(body):
	entered == false


func _on_VisibilityNotifier2D_screen_entered():
	seen = true
