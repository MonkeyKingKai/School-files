extends KinematicBody2D

onready var _animated_sprite = $AnimatedSprite

var speed = 40
var motion = Vector2(0,0)
onready var p = $"res://characters/player/Player.tscn
