extends KinematicBody2D

onready var Animation = $AnimationPlayer

var health = 200
var fire_hp = 10

func damage(amount:int):
	health -= amount
	if health <= 0:
		queue_free()
	if fire_hp <=0:
		queue_free()




func _on_Breath_area_entered(area):
	if area.is_in_group("Assest"):
		area.damage(3)


func _on_Area2D_body_entered(body):
	if body is Player:
		if body.has_method("die"):
			body.die()


func _on_Area2D_area_entered(area):
	if area.is_in_group("Assest"):
			area.damage(1)
