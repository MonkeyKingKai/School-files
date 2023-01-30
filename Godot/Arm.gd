extends Area2D

const SPEED = 300
const velocity = Vector2()
export var health: int = 1

func _ready():
	pass


func _physics_process(delta):
	velocity.x = SPEED * delta
	translate(velocity)
	$AnimatedSprite.play("Bullet")


func _on_VisibilityNotifier2D_screen_exited():
	 queue_free()


func damage(amount:int):
	health -= amount
	if health <= 0:
		queue_free()
		
func _on_Timer_timeout():
	pass # Replace with function body.
