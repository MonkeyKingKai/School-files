extends RigidBody2D
class_name Player
export var  FLAP_FORCE = -200

const FIREBALL = preload("res://Fireball.tscn")
const FireBreath = preload("res://Enemies/FireBeath.tscn")
signal died

onready var animator = $AnimationPlayer
onready var hit = $Hit
onready var wing = $Wing
onready var Sprite = $Sprite

var started = false
var alive = true 

export var fireDelay: float = 1
onready var FireDelayTimer := $FireDelayTimer

const MAX_ROTATION_DEGREES = -30.0



func _physics_process(_delta):
	if Input.is_action_just_pressed("Flap") && alive:
		if !started:
			start()
		flap()
		

 if Input.is_action_just_pressed("Shoot") and FireDelayTimer.is_stopped():
		FireDelayTimer.start(fireDelay)
		
		var fireball = FIREBALL.instance()
		get_parent().add_child(fireball)
		fireball.position = $Position2D.global_position
		
		if Input.is_action_just_pressed("Change") and FireDelayTimer.is_stopped():
			FireDelayTimer.start(fireDelay)
		
			var firebreath = FireBreath.instance()
			get_parent().add_child(firebreath)
			firebreath.position = $Position2D.global_positiono




	if rotation_degrees <= MAX_ROTATION_DEGREES:
		angular_velocity = 0
		rotation_degrees = MAX_ROTATION_DEGREES
		
	
	if linear_velocity.y > 0:
		if rotation_degrees <= 90:
			angular_velocity = 3
		else:
			angular_velocity = 0

func start():
	if started: return 
	started = true 
	gravity_scale = 5.0
	animator.play("Flap")


func flap():
	linear_velocity.y =  FLAP_FORCE
	angular_velocity = -8.0
	wing.play()
	
func die():
	if !alive: return 
	alive = false
	animator.play("Dead")

	hit.play()
	emit_signal("died")


