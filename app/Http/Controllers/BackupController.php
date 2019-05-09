<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('admin');
  }

  public function index(){
//    $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
    $disk = Storage::disk('local');
//    $files = $disk->files(config('laravel-backup.backup.name'));
    $files = $disk->files('backup');
    $backups = [];
    // make an array of backup files, with their filesize and creation date
    foreach ($files as $k => $f) {
      // only take the zip files into account
      if (substr($f, -4) == '.zip' && $disk->exists($f)) {
        $backups[] = [
          'file_path' => $f,
          'file_name' => str_replace('backup' . '/', '', $f),
          'file_size' => round(($disk->size($f)/1024)/1024,1) . 'MB',
          'last_modified' => $disk->lastModified($f),
        ];
      }
    }
    // reverse the backups, so the newest one would be on top
    $backups = array_reverse($backups);
    print_r($backups);
  }

}
