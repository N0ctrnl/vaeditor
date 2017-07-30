  <div class="table_container" style="width: 500px;">
    <div class="table_header">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td>View Aura</td>
          <td>
            <div style="float:right">
              <a href="index.php?editor=auras&type=<?=$aura['type']?>&action=5"><img src="images/edit2.gif" border="0" title="Edit this aura"></a>
              <a onClick="return confirm('Really delete aura <?=$aura['type']?>?');" href="index.php?editor=auras&type=<?=$aura['type']?>&action=7"><img src="images/remove2.gif" border="0" title="Delete this aura"></a>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <table class="table_content" width="100%" cellpadding="3" cellspacing="0">
      <tr>
        <td><strong>Type:</strong> <?=$aura['type']?><br><br></td>
        <td><strong>NPC:</strong> <?=$aura['npc_type']?><br><br></td>
        <td><strong>Name:</strong> <?=$aura['name']?><br><br></td>
      </tr>
      <tr>
        <td colspan="2"><strong>Spell:</strong> <?echo getSpellName($aura['spell_id']) . " (" . $aura['spell_id'] . ")" . " [<a href='http://lucy.allakhazam.com/spell.html?source=Live&id=" . $aura['spell_id'] . "' target='_blank'>Lucy</a>]"?><br><br></td>
        <td><strong>Distance:</strong> <?=$aura['distance']?><br><br></td>
      </tr>
      <tr>
        <td><strong>Aura Type:</strong> <?=$aura['aura_type']?><br><br></td>
        <td><strong>Spawn Type:</strong> <?=$aura['spawn_type']?><br><br></td>
        <td><strong>Movement:</strong> <?=$aura['movement']?><br><br></td>
      </tr>
      <tr>
        <td><strong>Duration:</strong> <?=$aura['duration']?><br><br></td>
        <td><strong>Icon:</strong> <?=$aura['icon']?><br><br></td>
        <td><strong>Cast Time:</strong> <?=$aura['cast_time']?><br><br></td>
      </tr>
    </table>
  </div>
