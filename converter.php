<?php

// This script maps espeak's IPA output to gentle/kaldi phones

function convertIPAtoGentle($ipa){
	$replace = [
		"ð" => "th",
		"ə" => "ah",
		"k" => "k",
		"w" => "w",
		"ɪ" => "ih",
		"b" => "b",
		"ɹ" => "r",
		"aʊ" => "aw",
		"n" => "n",
		"f" => "f",
		"ɒ" => "ao",
		"s" => "s",
		"dʒ" => "jh",
		"ʌ" => "ah",
		"m" => "m",
		"p" => "p",
		"v" => "v",
		"l" => "l",
		"eɪ" => "ey",
		"z" => "z",
		"ɡ" => "g",
		"ɜ" => "er",
		"h" => "hh",
		"əʊ" => "aw",
		"d" => "d",
		"ŋ" => "ng",
		"t" => "t",
		"θ" => "th",
		"aɪ" => "ay",
		"ɐ" => "eh",
		"u" => "uh",
		"ɛ" => "ae",
		"a" => "ae",
		"j" => "y",
		"i" => "iy",
		"tʃ" => "sh"
	];

	// Map every single ipa sound to a phoneme
	return $replace[$ipa];
}
