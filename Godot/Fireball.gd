extends Area2D

const SPEED = 250
var velocity = Vector2()

export var health: int = 1

func _ready():
	pass

func _physics_process(delta):
	velocity.x = SPEED * delta
	translate(velocity)
	$AnimatedSprite.play("Shoot")

func damage(amount:int):
	health -= amount
	if health <= 0:
		queue_free()


func _on_VisibilityNotifier2D_screen_exited():
	 queue_free() #destroy object when its not on screen


func _on_Fireball_area_entered(area):
	if area.is_in_group("damagable"):
		area.damage(1)



func _on_Timer_timeout():
	queue_free()
