<?php
/**
 * Project console
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 25/02/2024
 * Time: 02:24
 */

namespace nguyenanhung\Console\Support;

class OutputFigure
{
	public static function black($text): string
	{
		return '<fg=black>' . $text . '</>';
	}

	public static function red($text): string
	{
		return '<fg=red>' . $text . '</>';
	}

	public static function green($text): string
	{
		return '<fg=green>' . $text . '</>';
	}

	public static function yellow($text): string
	{
		return '<fg=yellow>' . $text . '</>';
	}

	public static function blue($text): string
	{
		return '<fg=blue>' . $text . '</>';
	}

	public static function magenta($text): string
	{
		return '<fg=magenta>' . $text . '</>';
	}

	public static function cyan($text): string
	{
		return '<fg=cyan>' . $text . '</>';
	}

	public static function white($text): string
	{
		return '<fg=white>' . $text . '</>';
	}

	public static function gray($text): string
	{
		return '<fg=gray>' . $text . '</>';
	}

	public static function bright_black($text): string
	{
		return '<fg=bright-black>' . $text . '</>';
	}

	public static function bright_red($text): string
	{
		return '<fg=bright-red>' . $text . '</>';
	}

	public static function bright_green($text): string
	{
		return '<fg=bright-green>' . $text . '</>';
	}

	public static function bright_yellow($text): string
	{
		return '<fg=bright-yellow>' . $text . '</>';
	}

	public static function bright_blue($text): string
	{
		return '<fg=bright-blue>' . $text . '</>';
	}

	public static function bright_magenta($text): string
	{
		return '<fg=bright-magenta>' . $text . '</>';
	}

	public static function bright_cyan($text): string
	{
		return '<fg=bright-cyan>' . $text . '</>';
	}

	public static function bright_white($text): string
	{
		return '<fg=bright-white>' . $text . '</>';
	}
}
