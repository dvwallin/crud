-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 19 sep 2012 kl 11:09
-- Serverversion: 5.5.25
-- PHP-version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databas: `crud_blog`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `blog`
--

CREATE TABLE `blog` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumpning av Data i tabell `blog`
--

INSERT INTO `blog` (`id`, `name`, `lastname`, `title`, `message`) VALUES
(40, 'Meias', 'Meias', 'Meias', 'Meias'),
(41, 'David', 'W', 'Hej hej', 'Testar igen'),
(42, 'Victor', 'H', 'Sjuk :(', 'Jag är sjuk idag IGEN!!!!'),
(43, 'David', 'W', 'Hej hej', 'Testar igen');
