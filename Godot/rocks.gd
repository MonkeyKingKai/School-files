extends Area2D
export var verticalspeed = 800.0
export var health: int = 1

func _physics_process(delta):
	position.x -= verticalspeed * delta
	$Rocks.play("default")

func damage(amount:int):
	health -= amount
	if health <= 0:
		queue_free()

func _on_VisibilityNotifier2D_screen_exited():
	queue_free()


func _on_Rocks_body_entered(body):
	if body is Player:
		if body.has_method("die"):
			body.die()


func _on_Rocks_area_entered(area):
	if area.is_in_group("Assest"):
				area.damage(1)

