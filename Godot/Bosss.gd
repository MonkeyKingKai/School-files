extends KinematicBody2D
onready var animator = $AnimationPlayer
const Shoots = preload("res://ArmFire.tscn")
onready var Idle = true

func Play_Idle():
	if Idle == true:
		animator.play("Idle")
	else:
			animator.stop("Idle")
func shoots():
	var Fire = Shoots.instance()
	get_parent().add_child(Fire)
	Fire.position = $Position2D.global_position
	

func _on_Shoot_timeout():
	animator.play("Shoot")
	Idle = false

