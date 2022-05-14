<?php


if (!empty($_SERVER['HTTPS'])) {
  echo "https enabled";
} else {
   echo "http is enabled";
}
