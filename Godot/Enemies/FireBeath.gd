extends Area2D

func _physics_process(delta):
	$AnimatedSprite.play("default")
	
func _on_Area2D_area_entered(area):
	if area.is_in_group("damagable"):
		area.damage(3)


