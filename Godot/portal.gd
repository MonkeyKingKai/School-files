extends Area2D
export var verticalspeed = 400.0

var entered = false

func _physics_process(delta):
	position.x -= verticalspeed * delta



func _on_VisibilityNotifier2D_screen_exited():
	queue_free()



func _on_Area2D_body_entered(body):
	if body	is Player:
		if entered == true:
				get_tree().change_scene("res://BossFight.tscn") 


func _on_Area2D_body_exited(body):
	entered == false
