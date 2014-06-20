! version = 2.0

> begin
	+ request // This trigger is tested first.
	- {ok}    // An {ok} in the response means it's okay to get a real reply
< begin

// The Botmaster's Name
! var master = aifr

// Bot Variables
! var name     = Aiden
! var fullname = Aiden Rive
! var age      = 5
! var birthday = October 12
! var sex      = male
! var location = Michigan
! var city     = Detroit
! var eyes     = blue
! var hair     = light brown
! var hairlen  = short
! var color    = blue
! var band     = Nickelback
! var book     = Myst
! var author   = Stephen King
! var job      = robot
! var website  = www.rivescript.com

// Substitutions
! sub brb       = be right back
! sub bbl       = be back later
! sub gtg       = got to go
! sub g2g       = got to go
! sub lyl       = love you lots
! sub gf        = girlfriend
! sub g/f       = girlfriend
! sub bf        = boyfriend
! sub b/f       = boyfriend
! sub b/f/f     = best friend forever
! sub :-)       = smile
! sub :)        = smile
! sub :d        = grin
! sub :-d       = grin
! sub :-p       = tongue
! sub :p        = tongue
! sub ;-)       = wink
! sub ;)        = wink
! sub :-(       = sad
! sub :(        = sad
! sub :'(       = cry
! sub :-[       = shy
! sub :-\       = uncertain
! sub :-/       = uncertain
! sub :-s       = uncertain
! sub 8-)       = cool
! sub 8)        = cool
! sub :-*       = kissyface
! sub :-!       = foot
! sub o:-)      = angel
! sub >:o       = angry
! sub :@        = angry
! sub 8o|       = angry
! sub :$        = blush
! sub :-$       = blush
! sub :-[       = blush
! sub :[        = bat
! sub (a)       = angel
! sub (h)       = cool
! sub 8-|       = nerdy
! sub |-)       = tired
! sub +o(       = ill
! sub *-)       = uncertain
! sub ^o)       = raised eyebrow
! sub (6)       = devil
! sub (l)       = love
! sub (u)       = broken heart
! sub (k)       = kissyface
! sub (f)       = rose
! sub (w)       = wilted rose

// Person substitutions
! person i am    = you are
! person you are = I am
! person i'm     = you're
! person you're  = I'm
! person my      = your
! person your    = my
! person you     = I
! person i       = you

// Set arrays
! array malenoun   = male guy boy dude boi man men gentleman gentlemen
! array femalenoun = female girl chick woman women lady babe
! array mennoun    = males guys boys dudes bois men gentlemen
! array womennoun  = females girls chicks women ladies babes
! array lol        = lol lmao rofl rotfl haha hahaha
! array colors     = white black orange red blue green yellow cyan fuchsia gray grey brown turquoise pink purple gold silver navy
! array height     = tall long wide thick
! array measure    = inch in centimeter cm millimeter mm meter m inches centimeters millimeters meters
! array yes        = yes yeah yep yup ya yea
! array no         = no nah nope nay


> begin
	+ request // This trigger is tested first.
	- {ok}    // An {ok} in the response means it's okay to get a real reply
< begin






// base.rs

! sub c'est quoi = ckoi
! sub qu'est-ce que = ckoi
! sub qu'est-ce qu = ckoi

! sub trad = traduire

